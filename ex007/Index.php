<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <form action="fun.php" method="post">
            <legend>Quantos R$ você tem na carteira?:</legend>
            <input type="number" name="numero" id="idnumero" step=".02">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>