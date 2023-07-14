<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        $numero1=$_GET['numero1'];
        $numero2=$_GET['numero2'];
        $operação=$_GET['operação'];

        if($operação == "soma") {
            $resultado = $numero1 + $numero2;
        }  else if($operação == "multiplicação") {
            $resultado = $numero1 * $numero2;
        }

        echo "Resultado: $resultado";
    ?>
</body>
</html>