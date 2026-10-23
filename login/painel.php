<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("location: login.php");
    exit;

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <span class="selo">Area secrets</span>
    <h1>Bem-vindo, <?php htmlspecialchars ($_SESSION["usuario"]) ?></h1>
    <p class="subt">Esta pagina é secreta. So quem faz login consegue ver</p>
    <a class="btnsair" href="sair.php">Sair<a>
</body>
</html>