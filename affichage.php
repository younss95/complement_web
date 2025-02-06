<?php


require_once("Classe/Utilisateur.php");

$user = new Utilisateur("Younes", "yns");
echo"<p>$user->login</p>";
echo"<p>$user->mdp</p>";


echo"<p>{$user->login}</p>";
echo"<p>{$user->mdp}</p>";

echo "<p>" .$user->information();