<?php
session_start();
$userTest = 'admin';
$passTest = 'admin7791';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = htmlspecialchars(trim($_POST['username']));
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        die('Au moins un champs n\'est pas valide !') ;
    }else{
        if($username === $userTest && $password === $passTest){
            $_SESSION['user']['username'] = $username;
            $_SESSION['user']['password'] = $password;
            header('Refresh:2, url=protected.php');
        }else{
            header('Refresh:2, url=index.php');
            die('Au moins un champs est invalide !');
        }
    }
}