<?php session_start()?>
<?php include_once('./layouts/header.php')?>
    <h2>Connecte toi</h2>
    <form method="POST" action="./home.php">
        <input type="text" name="firstname" placeholder="Your name">
        <input type="text" name="lastname" placeholder="Your lastname">
        <?php
            echo '<input type="submit" value="connexion">'
        ?>
    </form>

<?php include_once('./layouts/footer.php')?>