<?php
    require_once 'conn.php';

    $sql = "DELETE FROM products WHERE";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);
        
        header("location: producten.php")

?>