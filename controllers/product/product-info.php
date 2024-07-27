<?php

use Core\Database;

$currentUserId = $_SESSION['user']['user_id'];
$productName = $_POST['product_name'];
$productDescription = $_POST['about'];
$category = $_POST['category'];
$price = $_POST['price'];

// Handle file upload
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}
$uploadFile = $uploadDir . basename($_FILES['file-upload']['name']);
$imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

if (in_array($imageFileType, $allowedTypes) && $_FILES['file-upload']['size'] <= 10485760) {
    if (move_uploaded_file($_FILES['file-upload']['tmp_name'], $uploadFile)) {
        // File uploaded successfully
        $config = require base_path('config.php');
        $db = new Database($config['database']);

        $db->query("INSERT INTO products (name, description, category, price, image_path, user_id) VALUES (:name, :description, :category, :price, :image_path, :user_id)", [
            ':name' => $productName,
            ':description' => $productDescription,
            ':category' => $category,
            ':price' => $price,
            ':image_path' => $uploadFile,
            ':user_id' => $currentUserId
        ]);
        redirect('/collections');
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
} else {
    echo "File type not allowed or file size too large.\n";
}
