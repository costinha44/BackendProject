<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
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
        <a href="#">Anuncios</a>|
        <a href="#">Sair</a>
    </article>
    
    <div class="clear"></div>
    </header>
    <main class="main">
        <h1>Colocar anuncio</h1>
        <form class="form">
        <ul>
        <li>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
        </li>
        <li>
            <label for="titulo">Marca:</label>
            <select>
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
            </select>
        </li>
        <li>
            <label for="modelo">Modelo:</label>
            <select name="modelo" id="modelo">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
            </select>
        </li>
        <li>
            <label for="mes">Data de Registo:</label>
            <input type="text" name="mes" id="mes">/<input type="text" name="ano" id="ano">
        </li>
        <li>
            <label for="cilindrada">Cilindrada:</label>
            <input type="text" name="cilindrada" id="cilindrada">
        </li>
        <li>
            <label for="potencia">Potencia:</label>
            <input type="text" name=potencia id="potencia">
        </li>
        <li>
            <label for="combustivel">Combustivel:</label>
            <select name="combustivel" id="combustivel">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
            </select>
        </li>
        <li>
            <label for="kms">Kms:</label>
            <input type="text" name="kms" id="kms">
        </li>
        <li>
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor">
        </li>
        <li>
            <label for="portas">Nº Portas:</label>
            <input type="text" name="portas" id="portas">
        </li>
        <li>
            <label for="descricao">Descrição:</label>
            <textarea type="text" name="descricao" id="descricao"></textarea>
        </li>
        <li>
        <fieldset>
            <legend>Carateristicas</legend>
            <ul>
            <li>
                <input type="radio" name="gender" value="male">Jantes de Liga leve
            </li>
            </ul>
        </fieldset>
        </li>
        <li>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco">
        </li>
        <li>
            <input type="radius" name="destaque" id="destaque" value="1">
            <label for="portas">Colocar em Destaque?</label>
        </li>
        <li>
            <label>Foto1:</label>
            <input type="file" name="foto" id="foto" value="">
        </li>
        <li>
            <label>Foto2:</label>
            <input type="file" name="foto" id="foto" value="">
        </li>
        <li>
            <label>Foto3:</label>
            <input type="file" name="foto" id="foto" value="">
        </li>
        <li>
            <label>Foto4:</label>
            <input type="file" name="foto" id="foto" value="">
        </li>
        <li>
            <label>Foto5:</label>
            <input type="file" name="foto" id="foto" value="">
        </li>
         <button type="submit" name="btnregista">Registar anúncio</button>
        </ul>
        </form>
    </main>
</body>
</html>