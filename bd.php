<?php
     // Estabelecer uma ligação ao servidor MySQL e à base de dados que eu quero utilizar
    // $liga = mysqli_connect($host,$username,$passwd,$dbname,$porta);
    // localhost = 127.0.0.1 ou 1:0:0:0
    $liga = mysqli_connect("localhost","root","","standvirtual");
    if (!$liga) {
        //mysqli_connect_errno()-Mostra o nr de erro
        echo "Erro na ligação: " . mysqli_connect_errno() . " - " . mysqli_connect_error();
        exit();
//        die();
    }
    
    //    echo mysqli_get_host_info($liga);-Para mostrar o host
    mysqli_set_charset($liga, "utf8");//Para aparecer acentos
    
    #OU
//    mysqli_query("SET NAMES utf8");MENOS seguro
?>