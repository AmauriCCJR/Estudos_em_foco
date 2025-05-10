<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
    include "../includes/head.php"
?>
    <title>Pagina Inicial</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Estudos em foco</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link" href="#">Tarefas</a>
        <a class="nav-link" href="#">calendário</a>
        <a class="nav-link" href="#">Grupos de Estudo</a>
        <a class="nav-link" href="#">Anotações</a>
        <a class="nav-link" href="#">Progressão</a>
        <a class="nav-link" href="#">Contatos</a>
        <a class="nav-link" href="#"><img src="../img/profile.jpg" class="icone"></a>
      </div>
    </div>
  </div>
</nav>



<?php 
    include "../includes/scripts.php";
?>
</body>
</html>