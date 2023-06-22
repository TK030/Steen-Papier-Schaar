<?php
$returnText = '';
if (userHasValidSelection()) {
    $userChoice = $_GET['userSelect'];
    $computerChoice = letComputerChoose();
    $returnText = "De computer koos $computerChoice. ";
    $result = compare($userChoice, $computerChoice);
    if ($result == 0) {
        $returnText .= 'Het resultaat is gelijkspel!';
    } else if ($result == 1) {
        $returnText .= 'Jij hebt gewonnen!';
    } else {
        $returnText .= 'De computer heeft gewonnen!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Steen Papier Schaar</title>
</head>

<body>
    <header>
        <a class="terug" href="index.php">Ga Terug</a>
    </header>
    <h1>Steen Papier Schaar</h1>
    <form method="GET">
        <select name="userSelect">
            <option value="Steen" <?php echo isSelected('Steen'); ?>>Steen</option>
            <option value="Papier" <?php echo isSelected('Papier'); ?>>Papier</option>
            <option value="Schaar" <?php echo isSelected('Schaar'); ?>>Schaar</option>
        </select>
        <br>
        <input type="submit" value="Selecteer"></input>
    </form>
    <p><?php echo $returnText; ?></p>

    <?php
    function userHasValidSelection()
    {
        return isset($_GET['userSelect']) && in_array($_GET['userSelect'], ["Steen", "Papier", "Schaar"]);
    }

    function isSelected($choice)
    {
        if (isset($_GET['userSelect']) && $_GET['userSelect'] === $choice) {
            return 'selected';
        }
    }
    /**
     * computer maakt een keuze
     * geeft random keuze: steen, papier, schaar"
     */
    function letComputerChoose()
    {
        $numberChoice = rand(0, 2);
        if ($numberChoice == 0) {
            return "Steen";
        }
        if ($numberChoice == 1) {
            return "Papier";
        }
        return "Schaar";
    }
    /*
 * Vergelijkt de keuzes en geeft het antwoord terug als nummer:
 * 0 = gelijkspel
 * 1 = $choice 1 wint
 * 2 = $choice2 wint
*/
    function compare($choice1, $choice2)
    {
        if ($choice1 === $choice2) {
            return 0;
        }
        if ($choice1 === 'Steen') {
            if ($choice2 === 'Schaar') {
                return 1;
            } else {
                return 2;
            }
        }
        if ($choice1 === 'Papier') {
            if ($choice2 === 'Steen') {
                return 1;
            } else {
                return 2;
            }
        }
        if ($choice1 === 'Schaar') {
            if ($choice2 === 'Papier') {
                return 1;
            } else {
                return 2;
            }
        }
    }    ?>