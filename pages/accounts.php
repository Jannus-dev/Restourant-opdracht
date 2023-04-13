<?php
session_start();
require_once 'conn.php';
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute(); 
$data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bier Hier - Admin</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    include('adminheader.php')
?>

<section class="articlen">
        <?php

        foreach ($data as $row)
        {
            echo "<div class='bier'>";
            echo "<p class='users-t'>" . $row['username'] . "</p>";
            echo "<p class='users-t'>" . $row['password'] . "</p>";
            if($row['rol'] == 1){
                echo "<p class='users-t'>Admin</p>";
            }else
            if($row['rol'] < 10) {
                echo "<p class='users-t'>Medewerker</p>";
            }
            else{
                echo "<p class='users-t'>Klant</p>";
            }
            
            
            echo "<a href='user-aanpassen.php?id=".$row['id']."'>Edit</a>";
            echo "<a href='del-user.php?id=".$row['id']."' id='del'>Delete</a>";
            echo "</div>";
        }
        ?>
    </section>

</body>

</html>