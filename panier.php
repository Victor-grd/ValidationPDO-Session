<?php session_start()?>
<?php include_once('./layouts/header.php')?>
<?php include_once('./layouts/navbar.php')?>
<?php
    require_once('./db.php');
    $products = getAllPanier();
?>
  <table>
    <tr>
        <th>produit</th>
        <th>prix</th>
    </tr>
    <?php
    foreach ($products as $key => $value) {
        $tr = '<tr>';
        $tr .= '<td>'.$value['name'].'</td>';
        $tr .= '<td>'.$value['price'].'$</td>';
        $tr .= '</tr>'; 
        echo $tr;
    }
    ?>
  </table>
  
  <?php
  $total = 0;
    foreach ($products as $key => $value) {
        $total = $total + $value['price'];
    }
    $_SESSION['total']=$total;
  ?>

    <a href="./paye.php"><input type="submit" value="payer"></a>
 

<?php include_once('./layouts/footer.php')?>