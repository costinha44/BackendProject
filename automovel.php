<?php
include_once "bd.php";
session_start();
//"SELECT marcas.marca, modelo.modelo, automoveis.mes,automoveis.ano,automoveis.cilindrada,combustivel.combustivel,automoveis.kms,automoveis.cor,nportas.n_portas,automoveis.descricao,carateristicas.carateristicas,automoveis.preco FROM automoveis INNER JOIN marcas ON automoveis.marca=marcas.cod_marca INNER JOIN modelo ON automoveis.modelo=modelo.cod_modelo INNER JOIN autcomb ON automoveis.cod_aut=autcomb.cod_aut INNER JOIN combustivel ON autcomb.cod_comb=combustivel.cod_comb INNER JOIN autportas ON automoveis.cod_aut=autportas.cod_aut INNER JOIN nportas ON autportas.cod_portas=nportas.cod_portas INNER JOIN autcarat ON automoveis.cod_aut=autcarat.cod_aut INNER JOIN carateristicas ON autcarat.cod_carat=carateristicas.cod_carat"
    $automovel="SELECT automoveis.*,marcas.marca AS marcas, modelo.modelo AS modelos,combustivel.combustivel,nportas.n_portas FROM automoveis INNER JOIN marcas ON automoveis.marca=marcas.cod_marca INNER JOIN modelo ON automoveis.modelo=modelo.cod_modelo INNER JOIN autcomb ON automoveis.cod_aut=autcomb.cod_aut INNER JOIN combustivel ON autcomb.cod_comb=combustivel.cod_comb INNER JOIN autportas ON automoveis.cod_aut=autportas.cod_aut INNER JOIN nportas ON autportas.cod_portas=nportas.cod_portas WHERE automoveis.cod_aut=".$_GET['cod_a'];
    
    $resultado=mysqli_query($liga,$automovel);
    
    if(!$resultado){
        echo "Erro Interno!!! <br> Contacte suporte";
    }
    
$total_linhas=mysqli_num_rows($resultado);
    if($total_linhas==0){
        echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
//     header('location:index.php');
    }

    
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Automovel</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<header>
    <article class="logo">
        <img src="imagens/logotipo.png">    
    </article>
    <div class="clear"></div>
    <article class="header">
        <a href="#">Registo de Utilizador</a>|
        <a href="#">Login</a>|
        <a href="#">Acesso reservado</a>
    </article>
    <div class="clear"></div>
    <hr>
</header>
<main class="main">
    <?php
        $dados=mysqli_fetch_assoc($resultado);
    ?>
    <article>
    <div class="leftside">
    <h1><?=$dados['titulo'];?></h1>
    <table>
        <tr>
                <th>Marca:</th>
                <td><?=$dados['marcas'];?></td>
        </tr>
        <tr>
                <th>Modelo:</th>
                <td><?=$dados['modelos'];?></td>     
        </tr>
        <tr>
                <th>Registo:</th>
                <td><?=$dados['mes'];?>/<?=$dados['ano'];?></td>
        </tr>
        <tr>
                <th>Cilindrada:</th>
                <td><?=$dados['cilindrada'];?></td>
        </tr>
        <tr>
                <th>Combustivel:</th>
                <td><?=$dados['combustivel'];?></td>
        </tr>
        <tr>
                <th>Nº kms:</th>
                <td><?=$dados['kms'];?></td>
        </tr>
         <tr>
                <th>Cor:</th>
                <td><?=$dados['cor'];?></td>
        </tr>
         <tr>
                <th>Nº portas:</th>
                <td><?=$dados['n_portas'];?></td>
        </tr>
         <tr>
                <th>Descricao:</th>
                <td><?=$dados['descricao'];?></td>
        </tr>
         <tr>
             <th>Carateristicas:</th>
             <?php
             $carat="SELECT carateristicas FROM carateristicas INNER JOIN autcarat ON carateristicas.cod_carat=autcarat.cod_carat AND autcarat.cod_aut=".$_GET['cod_a'];
             $rescat=mysqli_query($liga,$carat);
             
             if(!$rescat){
                 echo "<td>Sem dados</td>";
                  echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
             }else{
                 $total_cat=mysqli_num_rows($rescat);
                 if($total_cat==0){
                     echo "<td>Sem dados</td>";
                      echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
                 }else{
                     while($cat=mysqli_fetch_assoc($rescat)){
                     ?>
                <td><?=$cat['carateristicas']?></td>
             
             <?php
                         }
                 }
             }
             ?>
        </tr>
         <tr>
                <th>Preco:</th>
                <td><?=$dados['preco'];?></td>
        </tr>
    </table>
    </div>
        
        <?php
         $foto="SELECT fotos.foto FROM fotos INNER JOIN autfoto ON fotos.cod_foto=autfoto.cod_foto AND autfoto.cod_aut=".$_GET['cod_a'];
        
        $resfo=mysqli_query($liga,$foto);
             
             if(!$resfo){
                 echo "<td>Sem fotos</td>";
                  echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
             }else{
                 $total_fo=mysqli_num_rows($resfo);
                 if($total_fo==0){
                     echo "<td>Sem dados</td>";
                      echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
                 }else{
                     $foto=mysqli_fetch_assoc($resfo);
        ?>
    <div class="rightside">
    <img class id="primaryimg" src="fotos/bmw1.jpg">
    <div class="minislide">
        <img data-img="<?=$foto['foto'];?>" src="<?=$foto['foto'];?>">
    </div>
 
        <?php
            while($fotor=mysqli_fetch_assoc($resfo)){             
        ?>
    <div class="minislide">
        <img data-img="<?=$fotor['foto'];?>" src="<?=$fotor['foto'];?>">
    </div>
            <?php
                    }
            ?>
    </div>
    <?php
                 }
             }
        
    ?>
        
    </article>
    <div class="clear"></div>
    <?php 
        if(!isset($_SESSION['user'])){}else{
    ?>
    <article>
    <h1>Entre em contacto com o vendedor</h1>
    <form class="form">
    <ul>
    <li>
    <label for="nome"><strong>Nome:</strong></label>
    Pedro Remoaldo
    <input type="hidden" value="qwerty">
    </li>
    <li>
    <label for="email"><strong>Email:</strong></label>
    premoaldo@gmail.com
    <input type="hidden" value="qwerty">  
    </li>
    <li>
    <label for="email"><strong>Telefone:</strong></label>
    123456789
    <input type="hidden" value="qwerty">  
    </li>
    <li>
   <textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
    </textarea>
    </li>
    <li>
    <strong>Oferta:</strong>
    <input type="text" value="">€
    </li>
    </ul>
    </form>
    </article>
    <?php
      }      
    ?>
</main>    
    
<script>
    $('.minislide img').on('mouseover',function(){
        var data=$(this).data('img');
        $('#primaryimg').attr('src',data);
    });
</script>
</body>
</html>
<?php
    mysqli_free_result($resultado);
    mysqli_free_result($rescat);
    mysqli_free_result($resfo);
    mysqli_close($liga);

?>