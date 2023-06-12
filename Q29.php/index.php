<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Páginas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            include("header.html");
        ?>
        <main>
            <h2>Este é o main! Aqui, encontramos os códigos em php. Observemos alguns exemplos:</h2>
            <?php
                echo "<h4>Agora, estamos dentro da supertag do php.</h4>";
                echo "<p>Aqui temos um echo. Ele serve como saída de dados e é por isso que você está vendo esta mensagem.</p>";
                
                $nome="Luenne";
                echo "A variável 'nome' guarda o nome <b>$nome</b>";
            ?>
            <hr>
            <p>O Páginas é um site sem fins lucrativos, então você é nosso patrocinador. Para contruir conosco, entre em contrato com <a href="https://www.linkedin.com/in/mateus-santos-1a7361246/" target="_blank">Mateus Santos</a></p>
        </main>
        <?php
            include("footer.html");
        ?>
</body>
</html>