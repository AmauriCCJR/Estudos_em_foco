<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Entrar</title>
</head>
<body class="container-fluid">

    <form action="pages/verifica.php" method="post" class="container col-12" id="form">
        <p id="erro" class="erro esconder"></p>
        <h1>Faça Login</h1>
        <label for="user">Nome de usuário:</label><br>
        <input type="text" name="user" placeholder="admin" id="user"><br><br>
        <label for="password">Senha:</label><br>
        <input type="text" name="password" placeholder="admin" id="senha"><br><br>
        <input type="submit" id="enviar" value="Entrar" class="btn btn-primary btn-enviar" onclick="verificarCampos(event)">
        
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
</body>
</html>