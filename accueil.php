<?php include_once('./layouts/header.php')?>
<?php include_once('./layouts/navbar.php')?>
<?php
    require_once('./db.php');
    $products = getAllProducts();
?>
  <table>
    <tr>
        <th>produit</th>
        <th>prix</th>
        <th>ajouter au panier</th>
    </tr>
    <?php
    foreach ($products as $key => $value) {
        $tr = '<tr>';
        $tr .= '<td>'.$value['name'].'</td>';
        $tr .= '<td>'.$value['price'].'$</td>';

        $tr .= '<td><form action="./addPanier.php" method="POST">';
        // $tr .= '<input type="hidden" name="idProduct" value="'.$value['id'].'">';
        $tr .= '<input type="hidden" name="nameProduct" value="'.$value['name'].'">';
        $tr .= '<input type="hidden" name="priceProduct" value="'.$value['price'].'">';
        $tr .= '<input type="submit" value="valider">';
        $tr .= '</form></td>';

        $tr .= '</tr>'; 
        echo $tr;
    }
    ?>
  </table>
  <?php include_once('./layouts/footer.php')?>