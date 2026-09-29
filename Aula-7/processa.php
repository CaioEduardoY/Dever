<?php
//recebe os dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = (int)$_POST['idade'];

//validação simples
if ($idade < 18) {
    echo "<p> Desculpe, apenas maiores de 18 anos podem se cadastrar.";
} else {
    //saida formada
    echo "<h3> Dados recebidos";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";

    //depuração
    echo "<h4>Debug com var_dumb:</h4>";
    var_dump($_POST);
}
?>