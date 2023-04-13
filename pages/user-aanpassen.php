<?php
session_start();
require_once 'conn.php';
$id = (int)$_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");

        $stmt->execute(['id' => $id]); 
        $row = $stmt->fetch();
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
                        <form name="verandergebreuker" action="aanpas-user.php" method="POST">
                            <input class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>"
                                type="hidden" for="id" />
                            <div class="form-group ">
                                <label class="control-label " for="name">
                                    Naam
                                </label>
                                <input class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>"
                                    type="text" for="username" />
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="password">
                                    password
                                </label>
                                <input class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>"
                                    type="text" for="password" />
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="number">
                                    Rol
                                </label>
                                <input class="form-control" id="rol" name="rol" type="text"
                                    value="<?php echo $row['rol']; ?>" />
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