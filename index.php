<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?10">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <div>
            <img id="logo" src="img/logo.png" alt="logo">
            <nav>
                <a href="#" id="knop">Home</a>
                <a href="#" id="knop">Bestellen</a>
                <a href="#" id="knop">Reviews</a>
                <a href="#" id="knop">Over Ons</a>
                <a href="#" id="knop">Contact</a>
            </nav>
            <a href="pages/login.php"><img src="img/account.png" alt="login" id="account-icon"></a>
        </div>
        <div class="header-content">
            <h1>
                Bier Hier
            </h1>
            <h2>
                Altijd voor jou
            </h2>
            <a href="#" id="knop">Bestellen</a>
            <img src="img/18plus.png" alt="18+">
        </div>
    </header>

    <main>
        <section class="review">
            <h1>Reviews</h1>

            <div class="review-list">
                <div class="reviews">
                    <h1 id="naam">Naam:</h1>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus soluta in nesciunt impedit. Accusantium rerum veniam quis? Sapiente, labore maxime fuga ipsa, cum dicta itaque quo voluptates voluptas harum nobis!</p>
                        <div class="score">
                            <p>⅘</p>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h1 id="naam">Naam:</h1>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus soluta in nesciunt impedit. Accusantium rerum veniam quis? Sapiente, labore maxime fuga ipsa, cum dicta itaque quo voluptates voluptas harum nobis!</p>
                        <div class="score">
                            <p>⅘</p>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h1 id="naam">Naam:</h1>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus soluta in nesciunt impedit. Accusantium rerum veniam quis? Sapiente, labore maxime fuga ipsa, cum dicta itaque quo voluptates voluptas harum nobis!</p>
                        <div class="score">
                            <p>⅘</p>
                        </div>
                    </div>
                </div>
                <a href="#" id="knop">Meer →</a>
            </div>
        </section>

        <section class="over-ons">
            <h1>Over Ons</h1>
            <div class="over-ons-content">
                <h2>Wij zijn de familie Hop</h2>
                <p>Wij zijn al 50 jaar in de bier industrie om mensen te adviseren over het beste bier.</p>
                <p>Onze gave voor het bier is generaties lang door gegeven in ons bloed en zit er nog altijd in.</p>
            </div>
        </section>

        <section class="contact">
            <div class="container">

                <h3 class="text-center">Contact us</h3><br />

                <div class="row">
                <div class="col-md-8">
                    <form action="/post" method="post">
                        <input class="form-control" name="name" placeholder="Name..." /><br />
                        <input class="form-control" name="phone" placeholder="Phone..." /><br />
                        <input class="form-control" name="email" placeholder="E-mail..." /><br />
                        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
                        <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
                    </form>
                </div>
                <div class="col-md-4">
                    <b>Customer service:</b> <br />
                    Phone: +1 129 209 291<br />
                    E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
                    <br /><br />
                    <b>Headquarter:</b><br />
                    Company Inc, <br />
                    Las vegas street 201<br />
                    55001 Nevada, USA<br />
                    Phone: +1 145 000 101<br />
                    <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />
                </div>
                </div>

            </div>

        </section>
    </main>

    <footer>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>