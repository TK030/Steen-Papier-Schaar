<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Steen Papier Schaar</title>
</head>

<body>
    <header>
        <a class="terug" href="index.php">Ga Terug</a>
    </header>
    <?php

    function keuzeSpeler1Tonen()
    {
        if (isset($_POST['keuzes1'])) {
            echo "<h3>Speler 1 heeft zijn keuze gemaakt</h3>";
        }
    }
    function keuzeSpeler2Tonen()
    {
        if (isset($_POST['keuzes2'])) {
            echo "Speler 2 heeft zijn keuze gemaakt";
        }
    }
    function resultaatTonen()
    {
        if (isset($_POST['keuzes2'])) {
            $keuzeSpeler1 = $_POST['keuzes1'];
            $keuzeSpeler2 = $_POST['keuzes2'];
            echo "<h1>Steen Papier Schaar</h1>";
            echo "<h4>Speler 1 heeft $keuzeSpeler1 gekozen</h4>";
            echo "<h4>Speler 2 heeft $keuzeSpeler2 gekozen</h4>";

            if ($keuzeSpeler1 == $keuzeSpeler2) {
                echo "<h2>Gelijkspel !</h2>";
            } elseif (
                ($keuzeSpeler1 == 'steen' && $keuzeSpeler2 == 'schaar') ||
                ($keuzeSpeler1 == 'papier' && $keuzeSpeler2 == 'steen') ||
                ($keuzeSpeler1 == 'schaar' && $keuzeSpeler2 == 'papier')
            ) {
                echo "<h2>De winnaar is speler 1 !</h3>";
            } else {
                echo "<h2>De winnaar is speler 2 !</h3>";
            }
        }
    }

    echo resultaatTonen();
    ?>

</body>

</html>