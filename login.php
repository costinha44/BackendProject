<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registo</title>
    <link rel="stylesheet" href="css/style.css">
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
   <form id="formregisto" class="leftside" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <table class="leftside">
        <tr>
            <th><label for="email">Email:</label></th>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <th><label for="senha">Senha:</label></th>
            <td><input type="text" name="senha" id="senha"></td>
        </tr>
        <tr>
        <td>
        <button type="submit" name="btnregista">Validar</button>
        </td>
        </tr>
    </table>
    </form>
</main>
</body>
</html>