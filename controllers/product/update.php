<?php

use Core\Database;

$currentUserId = $_SESSION['user']['user_id']; //Session::get use yan
$productName = $_POST['product_name'];
$productDescription = $_POST['about'];
$category = $_POST['category'];
$price = $_POST['price'];
$productId = $_POST['id'];
$originalImagePath = $_POST['image_path']; // Use camel case for consistency

// Handle file upload
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if a file is uploaded
if (isset($_FILES['file-upload']) && $_FILES['file-upload']['error'] === UPLOAD_ERR_OK) {
    $uploadFile = $uploadDir . basename($_FILES['file-upload']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($imageFileType, $allowedTypes) && $_FILES['file-upload']['size'] <= 10485760) {
        if (move_uploaded_file($_FILES['file-upload']['tmp_name'], $uploadFile)) {
            // File uploaded successfully
            $imagePath = $uploadFile;
        } else {
            echo "Possible file upload attack!\n";
            exit;
        }
    } else {
        echo "File type not allowed or file size too large.\n";
        exit;
    }
} else {
    // No new file uploaded, keep the original image path
    $imagePath = $originalImagePath;
}

// Update the product in the database
$config = require base_path('config.php');
$db = new Database($config['database']);

$db->query("UPDATE products SET name = :name, description = :description, category = :category, price = :price, image_path = :image_path WHERE id = :id", [
    ':name' => $productName,
    ':description' => $productDescription,
    ':category' => $category,
    ':price' => $price,
    ':image_path' => $imagePath,
    ':id' => $productId
]);

redirect('/collections');



