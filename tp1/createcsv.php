<?php

require_once ("Classe1/produits.php");

echo "<h1>Produits avec TVA</h1>";

$file = "produits.csv";
$fp = fopen($file, "r");


$outputFile = "produits_tva";
$outputFp = fopen($outputFile, "w");


fputcsv($outputFp, ["Nom", "Origine", "Prix HT", "TVA multipliée par 100"]);

while ($res = fgetcsv($fp, 1024, ",")) {

    $prixHT = (float)$res[2];  // Assurez-vous que $res[2] est bien le prix HT et qu'il est converti en float


    $produit = new produits($res[0], $res[1], $prixHT);


    if ($produit->origine == 'UE') {
        $tva = $produit->calculTVAUE();
    } else {
        $tva = $produit->calculTVNONUE();
    }


    fputcsv($outputFp, [$produit->nom, $produit->origine, $produit->prixHT, $tva]);
}


fclose($fp);
fclose($outputFp);

echo "Le fichier produits_avec_tva_multipliée_par_100.csv a été créé avec succès.";
?>
