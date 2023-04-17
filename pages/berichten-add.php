<?php
    require_once 'conn.php';

    $titel = $_POST['titel'];
    $text = $_POST['text'];
    $datum = $_POST['datum'];

    $sql = "INSERT INTO berichten (titel, text, datum)
    VALUES ('$titel', '$text', '$datum')";
    $conn->exec($sql);
    
    header("location: berichten.php")
?>