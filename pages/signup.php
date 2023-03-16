<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bier Hier - Login</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>
        <div class="nav">
            <img id="logo" src="../img/logo.png" alt="logo">
            <nav>
                <a href="../index.php" id="knop">Home</a>
                <a href="bestel.php" id="knop">Bestellen</a>
                <a href="../index.php#review" id="knop">Reviews</a>
                <a href="../index.php#over-ons" id="knop">Over Ons</a>
                <a href="../index.php#contact" id="knop">Contact</a>
            </nav>
            <a href="login.php"><img src="../img/account.png" alt="login" id="account-icon"></a>
        </div>

        <section class="vh-100 bg-image"
            style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                    <form name="signupform" action="upsign.php" method="POST">

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1cg"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1cg">Your Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="username"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="username">Your Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4cg"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cg">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Repeat your
                                                password</label>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3cg" />
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                        service</u></a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" value="submit" name="submit"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                        </div>

                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                                href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>



<!-- <form name="loginform" action="inlog.php" method="POST">

    <label for="username">User name:</label><br>
    <input type="text" name="username" id="username"><br>

    <label for="password">password:</label><br>
    <input type="password" id="password" name="password"><br>
    
    <br>
    <input type="submit" value="Submit">
</form> -->