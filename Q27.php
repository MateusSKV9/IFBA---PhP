<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potência</title>
</head>
<body>
    <main>
        <?php
            function expoente($a, $b) {
                $resultado=1;
                for($i=0; $i<$b; $i++) {
                    $resultado*=$a;
                }
                return $resultado;
            }
            echo "<p>Potência: </p>".expoente(2, 3);
        ?>
    </main>
</body>
</html>