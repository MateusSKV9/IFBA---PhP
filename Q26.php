<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior</title>
</head>
<body>
    <main>
        <?php
            function maiorNum($a, $b) {
                if($a>$b) {
                    $maior=$a;
                } else {
                    $maior=$b;
                }
                return $maior;
            }
            echo "<p>O maior número é: </p>".maiorNum(7, 69);
        ?>
    </main>
</body>
</html>