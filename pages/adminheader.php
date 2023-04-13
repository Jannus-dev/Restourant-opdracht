<header>
        <div>
            <img id="logo" src="../img/logo.png" alt="logo">
            <nav>
                <a href="backdesk.php" id="knop">Desktop</a>
                <?php
                    if ($_SESSION['rol'] <= 2)
                    {
                        echo "<a href='producten.php' id='knop'>Producten</a>";
                        echo "<a href='accounts.php' id='knop'>Werknemers</a>";
                    }
                ?>
                <a href="#" id="knop">Bestellingen</a>
                <a href="admin-reviews.php" id="knop">Reviews</a>
                <a href="#" id="knop">Berichten</a>
                <a href="#" id="knop">Nieuws</a>
            </nav>
        </div>
    </header>