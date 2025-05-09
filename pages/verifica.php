<?php 
$usuario = $_POST['user'];
$senha = $_POST['password'];


if ($usuario == "admin" && $senha == "admin"){
    header("location: home.php");
    exit;
} else {
    header ("location: ../index.php");
}




?>