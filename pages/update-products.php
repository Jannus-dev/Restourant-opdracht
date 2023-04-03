<?php
    require_once 'conn.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $data = [
        'id' => $id,
        'title' => $title,
        'info' => $info,
        'price' => $price,
        'image' => $image,
    ];

    $sql = "UPDATE products SET title=:title, info=:info, price=:price, image=:image WHERE id=:id";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    
    header("location: producten.php")
?>