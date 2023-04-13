<?php
    require_once 'conn.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $data = [
        'id' => $id,
        'username' => $username,
        'password' => $password,
        'rol' => $rol,
    ];

    $sql = "UPDATE users SET username=:username, password=:password, rol=:rol WHERE id=:id";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    
    header("location: accounts.php")
?>