<?php
    require_once 'conn.php';
    $stmt = $conn->prepare("SELECT * FROM reviews");
    $stmt->execute(); 
    $data = $stmt->fetchAll();
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bier Hier - Reviews</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/style.css?">
    <link rel="stylesheet" href="../css/reviews.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php 
    include 'header.php';
    ?>

    <main>
        <section class="review">
            <h1>Reviews</h1>

            <div class="review-list">

                <?php
                    foreach ($data as $row) {
                        echo "<div class='reviews'>";
                        echo "<h1 id='naam'>Naam: " . $row['name'] . "</h1>";
                        echo "<div class='review-content'>";
                        echo "<p>" . $row['review'] . "</p>";
                        echo "<div class='score'>";
                        if ($row['reting' == 5]){
                            echo "<p>5/5</p>";
                        }elseif ($row['reting' == 4]){
                            echo "<p>4/5</p>";
                        }elseif ($row['reting' == 3]){
                            echo "<p>3/5</p>";
                        }elseif ($row['reting' == 2]){
                            echo "<p>2/5</p>";
                        }elseif ($row['reting' == 1]){
                            echo "<p>1/5</p>";
                        }else{
                            echo "<p>6/5</p>";
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }


                ?>
            </div>
        </section>

        <?php
        include 'footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

</body>

</html>