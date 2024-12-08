<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>

<?php
// Validação e filtragem do valor recebido via GET
if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    $numero = intval($_GET["numero"]); // Converte para inteiro

    // Cálculo do antecessor e sucessor
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    // Saída formatada em HTML
    echo "<h1>O antecessor de $numero é <strong>$antecessor</strong>. <br>E o sucessor é <strong>$sucessor</strong></h1>";
} else {
    echo "<h1>Por favor, insira um número válido.</h1>";
}
?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

    </section>
    
    
</body>
</html>