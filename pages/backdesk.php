<?php
session_start();
if ($_SESSION['rol'] <= 9)
{}
else
{
    header("location: ../index.php");
}
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

    <header>
        <div>
            <img id="logo" src="../img/logo.png" alt="logo">
            <nav>
                <a href="#" id="knop">Desktop</a>
                <?php
                    if ($_SESSION['rol'] <= 2)
                    {
                        echo "<a href='#' id='knop'>Producten</a>";
                    }
                ?>
                <a href="#" id="knop">Bestellingen</a>
                <a href="#" id="knop">Reviews</a>
                <a href="#" id="knop">Berichten</a>
                <a href="#" id="knop">Nieuws</a>
                <p><?php echo $_SESSION['username'] ?></p>
            </nav>
            <a href="login.php"><img src="../img/account.png" alt="login" id="account-icon"></a>
        </div>
    </header>
    <main>
        <P>Welkom <?php echo $_SESSION['username'] ?></P>
        <p>
            <?php
                if ($_SESSION['rol'] <= 2)
                    {
                        echo "Functie Admin";
                    }
                    else{
                        echo "Functie Medewerker";
                    }
                ?>
        </p>
    </main>
</body>

</html>