<?php

echo "<h1>Produits </h1>";
echo "<style>
table,td,tr{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 8px;
}

</style>";

$file = "produits.csv";
$fp = fopen($file, "r");
echo "<table>";
while($res= fgetcsv($fp, 1024, ",")){
    echo "<tr>";
    foreach ($res as $val){
        echo "<td>".$val."</td>";
    }
    echo "</tr>\n";
}
echo "</table>";

