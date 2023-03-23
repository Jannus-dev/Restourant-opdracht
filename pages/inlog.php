    <?php
        require_once 'conn.php';
            // get input from form into vars
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $stmt = $conn->prepare("SELECT username, password, rol FROM users WHERE username=:username AND password=:password");
            $stmt->execute(['username' => $username, 'password' => $password]);
            $user = $stmt->fetch();
    
            if ($user != false) {
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['rol'] = $user['rol'];
                echo $_SESSION['rol'];
                echo "login succes <br>";
                echo "welcome " .$user['username'] . "! <br> password: " . $user['password'] . "<br>";
            } else {
                header("location: login.php");

            }

    ?>