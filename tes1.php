<?php 
require 'conn.php';

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

    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<?php if(isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username/password salah</p>
<?php endif; ?>

<form action="" method="post">
    
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </li>
        <button type="submit" name="login">Login</button>
    </ul>

</form>

</body>
</html>
