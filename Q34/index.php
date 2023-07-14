<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="pag2.php" method="get">
        <label for="numero1">Número 1</label>
        <div><input type="number" name="numero1" id="inumero1"></div>

        <label for="numero2">Número 2</label>
        <div><input type="number" name="numero2" id="inumero2"></div>

        <label for="operação">Operação</label>
        <select name="operação" id="ioperação">
            <option value="soma">Soma</option>
            <option value="multiplicação">Multiplicação</option>
        </select>

        <div>
            <input type="reset" value="Limpar">
            <input type="submit" value="Calcular">
        </div>
    </form>
    
</body>
</html>