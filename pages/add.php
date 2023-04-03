<?php
    require_once 'conn.php';

    $title = $_POST['title'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products (title, info, price, image)
    VALUES ('$title', '$info', '$price', '$image')";
    $conn->exec($sql);
    
    header("location: producten.php")
?>