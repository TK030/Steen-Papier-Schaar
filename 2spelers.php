<?php include "game.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock_Paper_Scissors</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Steen Papier Schaar</h1>
    <!-- Speler 1 -->
    <form action="" method="post">
        <?php if (!isset($_POST['keuzes1']) && !isset($_POST['keuzes2'])) : ?>
            <label for="speler1">
                <h2>Speler 1:</h2>
            </label>
            <select name="keuzes1" id="keuzes1">
                <option value="steen">Steen</option>
                <option value="papier">Papier</option>
                <option value="schaar">Schaar</option>
            </select>
            <br><input type="submit" value="Selecteer">

        <?php endif; ?>

    </form>

    <!-- Speler 2 -->

    <form action="game.php" method="post">
        <?php if (isset($_POST['keuzes1']) && !isset($_POST['keuzes2'])) : ?>
            <input type="hidden" name="keuzes1" value="<?= $_POST['keuzes1']; ?>">
            <?php echo keuzeSpeler1Tonen(); ?>
            <label for="speler2">
                <h2>De beurt van speler 2:</h2>
            </label>

            <select name="keuzes2" id="keuzes2">
                <option value="steen">Steen</option>
                <option value="papier">Papier</option>
                <option value="schaar">Schaar</option>
            </select>
            <br><input type="submit" value="Selecteer">
    </form>

<?php endif ?>
<?php echo resultaatTonen(); ?>

</form>
</body>

</html>