<?php
/* Internet Media Type - MIME Type */
    header('Content-Type: application/json');
    include "bd.php";
    $comando="SELECT cod_modelo,modelo,cod_marca FROM modelo WHERE cod_marca=".$_GET['cod_marca'];
    $resultado=mysqli_query($liga,$comando);
    $dados=array();
    while ($linha=mysqli_fetch_assoc($resultado)) {
        array_push($dados, array("modelo"=>$linha['modelo'],"cod_modelo"=>$linha['cod_modelo'],"cod_marca"=>$linha['cod_marca']));
    }
    echo "<pre>".print_r($dados,TRUE)."</pre>";
    echo json_encode($dados);
    mysqli_free_result($resultado);
    mysqli_close($liga);
?>
