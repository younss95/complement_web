<?php
include("Classe/Utilisateur.php");
if(isset($_POST['login'], $_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($login == 'admin' && $password == 'admin'){
        session_start();
        $user = new Utilisateur($login, $password);
        $_SESSION['user'] = serialize($user);
        header("Location: admin.php");

    }
    else{
        header("Location: form.php");
    }

}