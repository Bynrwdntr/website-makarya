<?php
session_start();
$errorMsg = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errorMsg = "Please fill in both email and password fields.";
    } else {
        // Update these variables with your actual database information
        $servername = "localhost";
        $dbUsername = "root"; // ganti dengan username database Anda
        $dbPassword = ""; // ganti dengan password database Anda
        $dbname = "mydatabase";

        $connection = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

        if ($connection->connect_error) {
            $errorMsg = "Failed to connect to the database: " . $connection->connect_error;
        } else {
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['email'] = $email;
                    header("Location: success.html");
                    exit;
                } else {
                    $errorMsg = "Invalid email or password.";
                }
            } else {
                $errorMsg = "Invalid email or password.";
            }

            $stmt->close();
            $connection->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.5/dist/flowbite.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-500 to-white-600 text-gray-800 flex justify-center items-center h-screen">
    <div class="container mx-auto max-w-md">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden p-6">
            <!-- Replace the heading with an image -->
            <div class="flex justify-center mb-6">
                <img src="logo.jpg" alt="Logo" class="h-52">
            </div>
            <form action="login.php" method="post" class="space-y-6">
                <div class="relative">
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none" required>
                    <i class="lni lni-envelope text-gray-400 absolute top-3 right-4"></i>
                </div>
                <div class="relative">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none" required>
                    <i class="lni lni-lock text-gray-400 absolute top-3 right-4"></i>
                </div>
                <div class="flex justify-between items-center">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-md text-lg font-semibold"
                    name="submit">Log In</button>
                <div class="text-center text-gray-600">or log in with</div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="lni lni-facebook-fill text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="lni lni-google text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="lni lni-instagram-fill text-2xl"></i>
                    </a>
                </div>
                <?php if (!empty($errorMsg)) : ?>
                <p class="text-red-500"><?php echo $errorMsg; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>
</body>

</html>
