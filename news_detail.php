<?php
require 'conn.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch news details based on the ID
    $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();
    $stmt->close();

    if (!$news) {
        echo "News not found.";
        exit();
    }
} else {
    header("Location: manage_news.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $news['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6"><?php echo $news['title']; ?></h1>
            <?php if (isset($news['image']) && $news['image'] != '') : ?>
                <img src="<?php echo $news['image']; ?>" alt="News Image" class="w-full h-96 object-cover mb-6 rounded">
            <?php endif; ?>
            <p class="text-xl mb-4"><?php echo $news['content']; ?></p>
            <p class="text-gray-600">By <?php echo $news['author']; ?></p>
            <a href="berita.php" class="text-blue-600 hover:underline">Back to News</a>
        </div>
    </div>
</body>

</html>