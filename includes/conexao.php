<?php
    $hostname ='localhost';
    $username ='root';
    $password ='';
    $database ='controle_animais';
    $port =3307;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("erro conexão: %s", mysqli_connect_error());
        exit();

    }
?>