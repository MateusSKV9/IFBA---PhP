<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Confirmação de dados</h1>
    <?php
        $nome=$_GET['nome'];
        $email=$_GET['email'];
        $data=$_GET['dat'];
        $endereco=$_GET['end'];
        $telefone=$_GET['tel'];
        $genero=$_GET['genero'];

        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Data de Nascimento: $data<br>";
        echo "Endereço: $endereco<br>";
        echo "Telefone: $telefone<br>";
        echo "Gênero: $genero<br>";
    ?>

    <a href="index.php"><input type="button" value="Voltar"></a>
    <a href="pag3.php"><input type="button" value="Confirmar dados"></a>
</body>
</html>