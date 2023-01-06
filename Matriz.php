<?php
use LDAP\Result;

if (isset($_POST['enviar'])) {
    //print_r($_POST['cnpj']);
    //print_r($_POST['instituicao']);

    include_once('conexaodb.php');

    $cnpj = $_POST['cnpj'];
    $instituicao = $_POST['instituicao'];

    $result = mysqli_query($conexao, "INSERT INTO MATRIZ(id_cnpj,razaosocial) 
    value ('$cnpj','$instituicao')");
}
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de Instituição de Microcrédito no Brasil</title>
</head>
<body>
    <form action="Matriz.php" method="post"> 
        <h1>Cadastro de Instituição de Microcrédito no Brasil</h1>
        <fieldset>
            <br>
            <div class="inputbox">
                <label for="cnpj">CNPJ:</label>
                <input type="text" name="cnpj" id="cnpj" class="inputUser" required>
            </div>
            <br>
            <div class="inputbox">
                <label for="instituicao">INSTITUIÇÃO:</label>
                <input type="text" name="instituicao" id="instituicao" size="50%" class="inputUser" required>
            </div>
            <br>
            <input type="submit" name="enviar" id="enviar">
        </fieldset>
    </form>
</body>
</HTMl>