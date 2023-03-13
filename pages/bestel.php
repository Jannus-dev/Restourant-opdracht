<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css?11">
    <link rel="stylesheet" href="../css/bestel.css?1">
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
                <a href="../index.php" id="knop">Home</a>
                <a href="bestel.php" id="knop">Bestellen</a>
                <a href="#review" id="knop">Reviews</a>
                <a href="#over-ons" id="knop">Over Ons</a>
                <a href="#contact" id="knop">Contact</a>
            </nav>
            <a href="login.php"><img src="../img/account.png" alt="login" id="account-icon"></a>
        </div>
    </header>

    <main>
        <h1 id="b-pagina">Bestellen</h1>

        <section class="producten">
            <div class="product">
                <img src="../img/bier/hertog-jan.jpg" alt="bier" class="image" style="width:330px">
                <div class="middle">
                    <div class="text">
                        <h2>Hertog Jan</h2>
                        <p>Alleen de rijkste mout, de mooiste hop en kristalhelder natuurzuiver water uit de Eiffel zijn
                            goed genoeg. Deze ingrediënten en de kunde van de brouwers zorgen voor goudgele kleur en de
                            mooie volle schuimkraag. De zachte smaak en de aangenaam bittere afdronk zijn karakteristiek
                            voor Hertog Jan Pilsener.</p>
                        <p class="prijs">€1,75</p>
                        <a href="" id="knop">Voeg Toe</a>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="../img/bier/hertog-jan.jpg" alt="bier" class="image" style="width:330px">
                <div class="middle">
                    <div class="text">
                        <h2>Hertog Jan</h2>
                        <p>Alleen de rijkste mout, de mooiste hop en kristalhelder natuurzuiver water uit de Eiffel zijn
                            goed genoeg. Deze ingrediënten en de kunde van de brouwers zorgen voor goudgele kleur en de
                            mooie volle schuimkraag. De zachte smaak en de aangenaam bittere afdronk zijn karakteristiek
                            voor Hertog Jan Pilsener.</p>
                            <p class="prijs">€1,75</p>
                        <a href="" id="knop">Voeg Toe</a>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="../img/bier/hertog-jan.jpg" alt="bier" class="image" style="width:330px">
                <div class="middle">
                    <div class="text">
                        <h2>Hertog Jan</h2>
                        <p>Alleen de rijkste mout, de mooiste hop en kristalhelder natuurzuiver water uit de Eiffel zijn
                            goed genoeg. Deze ingrediënten en de kunde van de brouwers zorgen voor goudgele kleur en de
                            mooie volle schuimkraag. De zachte smaak en de aangenaam bittere afdronk zijn karakteristiek
                            voor Hertog Jan Pilsener.</p>
                            <p class="prijs">€1,75</p>
                        <a href="" id="knop">Voeg Toe</a>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="../img/bier/hertog-jan.jpg" alt="bier" class="image" style="width:330px">
                <div class="middle">
                    <div class="text">
                        <h2>Hertog Jan</h2>
                        <p>Alleen de rijkste mout, de mooiste hop en kristalhelder natuurzuiver water uit de Eiffel zijn
                            goed genoeg. Deze ingrediënten en de kunde van de brouwers zorgen voor goudgele kleur en de
                            mooie volle schuimkraag. De zachte smaak en de aangenaam bittere afdronk zijn karakteristiek
                            voor Hertog Jan Pilsener.</p>
                            <p class="prijs">€1,75</p>
                        <a href="" id="knop">Voeg Toe</a>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="../img/bier/hertog-jan.jpg" alt="bier" class="image" style="width:330px">
                <div class="middle">
                    <div class="text">
                        <h2>Hertog Jan</h2>
                        <p>Alleen de rijkste mout, de mooiste hop en kristalhelder natuurzuiver water uit de Eiffel zijn
                            goed genoeg. Deze ingrediënten en de kunde van de brouwers zorgen voor goudgele kleur en de
                            mooie volle schuimkraag. De zachte smaak en de aangenaam bittere afdronk zijn karakteristiek
                            voor Hertog Jan Pilsener.</p>
                            <p class="prijs">€1,75</p>
                        <a href="" id="knop">Voeg Toe</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">

                <h3 class="text-center">Contact us</h3><br />

                <div class="row">
                    <div class="col-md-8">
                        <form action="/post" method="post">
                            <input class="form-control" name="name" placeholder="Name..." /><br />
                            <input class="form-control" name="phone" placeholder="Phone..." /><br />
                            <input class="form-control" name="email" placeholder="E-mail..." /><br />
                            <textarea class="form-control" name="text" placeholder="How can we help you?"
                                style="height:150px;"></textarea><br />
                            <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
                        </form>
                    </div>
                    <div class="col-md-4">
                        <b>Customer service:</b> <br />
                        Phone: +1 129 209 291<br />
                        E-mail: <a href="mailto:service@bierhier.nl">service@bierhier.nl</a><br />
                    </div>
                </div>

            </div>

        </section>
    </main>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="jannus-dev.github.io">Jannus-Dev</a>
        </div>
        <!-- Copyright -->
    </footer>
    <a href="#" id="mand">
        <div class="mand"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                class="bi bi-cart4" viewBox="0 0 16 16">
                <path
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg></div>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>