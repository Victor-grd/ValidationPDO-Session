<?php
function getAllProducts(){
    $connec = new PDO('mysql:dbname=products','root','0000');
    $request = $connec->prepare('SELECT * FROM products');
    $request->execute();
    return $request->fetchAll();
};
function getAllPanier(){
    $connec = new PDO('mysql:dbname=products','root','0000');
    $request = $connec->prepare('SELECT * FROM panier');
    $request->execute();
    return $request->fetchAll();
};

function addPanier($nameProduct,$priceProduct){
    $connec = new PDO('mysql:dbname=products','root','0000');
    $request = $connec->prepare("INSERT INTO panier (name, price) 
    VALUES (:nameProduct, :priceProduct);");
    $request->execute([
        ":nameProduct" => $nameProduct,
        ":priceProduct" => $priceProduct,
    ]);
}
?>