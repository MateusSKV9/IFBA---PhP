<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        $nome=$_GET['nome'];
        $email=$_GET['email'];
        $genero=$_GET['genero'];
        $estado=$_GET['estado'];

        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Gênero: $genero<br>";
        echo "Estado: $estado<br>";
    ?>
</body>
</html>