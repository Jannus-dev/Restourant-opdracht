<header>
        <div>
            <a href="logout.php"><img id="logo" src="../img/logo.png" alt="logo"></a>
            <nav>
                <a href="backdesk.php" id="knop">Desktop</a>
                <?php
                    if ($_SESSION['rol'] <= 2)
                    {
                        echo "<a href='producten.php' id='knop'>Producten</a>";
                        echo "<a href='accounts.php' id='knop'>Werknemers</a>";
                    }
                ?>
                <a href="bestellingen.php" id="knop">Bestellingen</a>
                <a href="admin-reviews.php" id="knop">Reviews</a>
                <a href="berichten.php" id="knop">Berichten</a>
            </nav>
        </div>
    </header>