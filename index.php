<?php
 include_once 'bd.php';

    $marca="SELECT cod_marca,marca FROM marcas";
    $resultado=mysqli_query($liga,$marca);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Standvirtual</title>
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
        <!-- Pesquisa -->
        
    <?php
        if(!$resultado){
        echo "Erro na escolha de dados";
    }else{
    $totalregistos=mysqli_num_rows($resultado);
    if($totalregistos==0){ 
        echo "Ocorreu um erro,contacte o suporte!!";
    }else{
        ?>
    <article>
    <h1>Pesquisa</h1>
        <form class="pesquisa">
            <ul>
           <li>
               
                <label for="marca">Marca:</label>
                <select name="marca" id="marca">
                    <?php while($marcas=mysqli_fetch_assoc($resultado)){ ?>
                    <div id="clickM" data-marca="<?=$marcas['cod_marca']?>">
                    <option  value="<?=$marcas['cod_marca']?>"><?=$marcas['marca']?></option>
                    </div>
                    <?php } ?>
                </select>
            </li>
            <li>
                <label for="modelo">Modelo:</label>
                <select name="modelo" id="modelo">
                      <option class="insertMOD" value=""></option>
                </select>
            </li>
            <li>
                <label for="combustivel">Combustivel:</label>
                <select name="combustivel" id="combustivel">
                      <option value="volvo">Volvo</option>
                </select>
            </li>
            <button type="submit">Pesquisar</button>
                </ul>
        </form>
    </article>
    <?php 
            }
        }?>
    <!-- Fim Pesquisa -->
    <article class="destaque">
        <h1>Destaques</h1>
        <?php 
            $destaque="SELECT fotos.foto,automoveis.titulo,marcas.marca,marcas.cod_marca FROM automoveis INNER JOIN autfoto ON automoveis.cod_aut=autfoto.cod_aut INNER JOIN marcas ON automoveis.marca=marcas.cod_marca INNER JOIN fotos ON autfoto.cod_foto=fotos.cod_foto  WHERE destaque=1 ORDER BY automoveis.cod_aut DESC,autfoto.cod_aut ASC";
        $resultadodes=mysqli_query($liga,$destaque);
        if(!$resultadodes){
            echo 'Ocorreu um erro, informe o suporte';
            echo "<p>".mysqli_errno($liga)." - ".mysqli_error($liga)."</p>";
        }else{
            $total_destaque=mysqli_num_rows($resultadodes);
            if($total_destaque==0){
                echo 'Sem Destaques';
            }else{
                         $destaque=mysqli_fetch_assoc($resultadodes);
                     
       ?>
            <figure class="imgdes">
            <img src="<?=$destaque['foto']?>" >
            <figcaption><?=$destaque['titulo']?></figcaption>
        </figure>
        <?php
            }
        }
        ?>
    </article>
        <div class="clear"></div>
    <article id="pesquisa"></article>
    </main>
<script>
        function mostraPaises() {
       var tabela="";
       $.ajax({
            url: 'pesquisa.php',
            type: 'GET',
            dataType: 'json',
            success: function(dados) {
                tabela='<table id="dados"><thead><tr><th>Nome</th><th>Continente</th><th>Região</th><th>População</th></tr></thead><tbody>';
                for(var pos=0,tamanho=dados.length;pos<tamanho;pos++) {
                    tabela+='<tr data-codigo='+dados[pos].cod_modelo+'>';
                    tabela+='<td>'+dados[pos].modelo+'</td>';
                    tabela+='</tr>';
                }
//                console.log(dados[0].nome);                
//                dados.forEach(function(elemento) {
//                    tabela+="<p>"+elemento.nome+"</p>";
//                });
                tabela+='</tbody></table>';
                $("#pesquisa").html(tabela);
            },
            error: function(jqXHR, textStatus, errorThrown) {				
              $("#pesquisa").text("Erro !"+textStatus+errorThrown);
            }
       });
   } 
    $("#clickM").on("click",function() {
       var valor_marca=$(".clickM").data("marca");
        alert(valor_marca);
    });

</script>
</body>
</html>