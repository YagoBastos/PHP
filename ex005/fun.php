<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado final</h1>
        <?php 
            $numero = $_POST["numero"];
            echo "O numero é: $numero";
            echo "</br>O antecessor do numero é: ".($numero-1);
            echo "</br>O sucessor do numero é: ".($numero+1);
            echo "<a href='javascript:history.go(-1)'><input type='button' value='\u{25C0} Voltar'></a>"
        ?>
    </main>
</body>
</html>