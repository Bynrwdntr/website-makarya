<?php
session_start();
require '../db/conn.php';

$errorMsg = '';

function login($username, $password)
{
    global $conn;

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? AND password = SHA2(?, 256)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id);
        $stmt->fetch();
        $_SESSION['user_id'] = $id;
        $stmt->close(); // Close the statement here
        return true;
    } else {
        $stmt->close(); // Close the statement here
        return false;
    }
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (login($username, $password)) {
        header("Location: ../dashboard/admin_panel.php");
        exit();
    } else {
        $errorMsg = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.5/dist/flowbite.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-500 to-white-600 text-gray-800 flex justify-center items-center h-screen">
    <div class="container mx-auto max-w-md">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden p-6">
            <div class="flex justify-center mb-6">
                <img src="../img/logo.jpg" alt="Logo" class="h-52">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                <div class="relative">
                    <input type="text" name="username" placeholder="Username" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none" required>
                    <i class="lni lni-envelope text-gray-400 absolute top-3 right-4"></i>
                </div>
                <div class="relative">
                    <input type="password" name="password" placeholder="Password" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:outline-none" required>
                    <i class="lni lni-lock text-gray-400 absolute top-3 right-4"></i>
                </div>
                <div class="flex justify-between items-center">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-md text-lg font-semibold" name="login">Log In</button>
                <?php if (!empty($errorMsg)) : ?>
                    <p class="text-red-500"><?php echo $errorMsg; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>
</body>

</html>
