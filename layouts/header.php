
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Validation</title>
</head>
<body>
    <header>
    <?php
        if (isset($_SESSION['firstname']) || isset($_SESSION['lastname'])) {
            echo "<p>Bonjour,".$_SESSION['firstname']." ".$_SESSION['lastname']."!</p>";
        }
    ?>
    </header>