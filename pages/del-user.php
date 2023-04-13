<?php
    require_once 'conn.php';

    $sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
    $stmt= $conn->prepare($sql);
    $conn->exec($sql);
        
        header("location: accounts.php")

?>