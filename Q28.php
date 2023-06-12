<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    <main>
        <?php
            function numPares() {
                for($i=0; $i<=100; $i+=2) {
                    echo $i." - ";
                }
            }
            numPares();
        ?>
    </main>
</body>
</html>