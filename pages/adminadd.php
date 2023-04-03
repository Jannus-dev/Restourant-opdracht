<?php
session_start();
require_once 'conn.php';

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
    <main>
        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row" id="center-dit">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form name="addproductform" action="add.php" method="POST">
                            <div class="form-group ">
                                <label class="control-label " for="name">
                                    Titel
                                </label>
                                <input class="form-control" id="title" name="title" placeholder="Product titel"
                                    type="text" for="title"/>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="textarea">
                                    Product informatie
                                </label>
                                <textarea class="form-control" cols="40" id="info" name="info"
                                    placeholder="Product informatie" rows="5" for="info"></textarea>
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="number">
                                    Prijs
                                </label>
                                <input class="form-control" id="price" name="price" type="text" />
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="text">
                                    Afbeelding
                                </label>
                                <input class="form-control" id="image" name="image" placeholder="Link hier" type="text" />
                            </div>
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-primary " id="sub" name="submit" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>