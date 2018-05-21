<?php
session_start();
$secure=0;
if (isset($_POST['btSubmit'])) {
    include_once 'securimage/securimage.php';
    $securimage = new Securimage();

    if ($securimage->check($_POST['captcha_code'])) {
        echo "Captcha certo";
    } else {
        echo "Captcha errado";
    }
}
?>

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
        <a href="#">Perfil</a>|
        <a href="#">Sair</a>
    </article>
    
    <div class="clear"></div>
    </header>
<main class="main">
    <h1>Alterar Perfil</h1>
   <form id="formregisto" class="leftside" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <table class="leftside">
        <tr>
            <th><label for="nome">nome:</label></th>
            <td><input type="text" name="nome" id="nome"></td>
        </tr>
        <tr>
            <th><label for="email">Email:</label></th>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <th><label for="morada">Morada:</label></th>
            <td><input type="text" name="morada" id="morada"></td>
        </tr>
        <tr>
            <th><label for="localidade">Localidade:</label></th>
            <td><input type="text" name="localidade" id="localidade"></td>
        </tr>
        <tr>
            <th><label for="cp">CP:</label></th>
            <td><input type="text" name="cp" id="cp"><input type="text" name="cp" id="cp"></td>
        </tr>
        <tr>
            <th><label for="telefone">telefone:</label></th>
            <td><input type="text" name="telefone" id="telefone"></td>
        </tr>
        <tr>
            <th><label for="senha">Senha:</label></th>
            <td><input type="text" name="senha" id="senha"></td>
        </tr>
        <tr>
            <th><label for="rsenha">Repetir senha:</label></th>
            <td><input type="text" name="rsenha" id="rsenha"></td>
        </tr>
        <tr>
        <td> <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
    <p><input type="text" name="captcha_code" size="10" maxlength="6" /> <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Outra Imagem ]</a></p>
    <input type="hidden" id="tokenform" name="tokenform" value="<?=$secure?>">
    <p></p>
        </td>
        </tr>
        <tr>
        <td>
        <button type="submit" name="btnregista">Registar</button>
        </td>
        </tr>
    </table>
    </form>
</main>
</body>
</html>