<?php 
require 'conn.php';

$errorMsg = '';

if ( isset($_POST["login"]) ) {
    
    // Menggunakan nama input yang benar dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek username
    if ( mysqli_num_rows($result) === 1 ){
        header("location: landingpage.php");
        exit;
    }

    $errorMsg = "username/password salah";
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
            <div class="flex justify-center mb-6">
                <img src="logo.jpg" alt="Logo" class="h-52">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                <div class="relative">
                    <input type="email" name="username" placeholder="Email Address"
                        class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none">
                    <i class="lni lni-envelope text-gray-400 absolute top-3 right-4"></i>
                </div>
                <div class="relative">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none">
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
                    name="login">Log In</button>
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
