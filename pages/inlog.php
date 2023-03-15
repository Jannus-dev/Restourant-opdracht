    <?php
        require_once 'conn.php';
            // get input from form into vars
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $stmt = $conn->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
            $stmt->execute(['username' => $username, 'password' => $password]);
            $user = $stmt->fetch();
    
            if ($user != false) {
                echo "login succes <br>";
                echo "welcome " .$user['username'] . "! <br> password: " . $user['password'] . "<br>";
            } else {
                echo "account does not exist.. <br>";
            }

    ?>