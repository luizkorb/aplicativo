<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
        echo($nome);
            echo("<br>")
        echo($cpf);
            echo("<br>")
        echo($email);
            echo("<br>")
        echo($senha);
            echo("<br>")
    ?>
</body>
</html>