<?php session_start()?>
<?php include_once('./layouts/header.php')?>
<?php include_once('./layouts/navbar.php')?>

<h1>Hey</h1>
<?php 
echo '<h1>Prix total: '. $_SESSION['total'] .'</h1>';
?>

<?php include_once('./layouts/footer.php')?>
