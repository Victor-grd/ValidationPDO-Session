<?php
  session_start();
  require_once('./db.php');
  addPanier($_POST['nameProduct'],$_POST['priceProduct']);
  header('Location: /home.php');die;