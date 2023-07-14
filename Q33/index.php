<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="pag2.php" method="GET">
        <label for="nome">Nome</label>
        <div><input type="text" name="nome" id="inome" required></div>

        <label for="email">Email</label>
        <div><input type="email" name="email" id="iemail"></div>

        <label for="genero">Gênero: </label>
        <input type="radio" value="feminino" name="genero" id="ifememino">
        <label for="feminino">Feminino</label>
        <input type="radio" value="masculino" name="genero" id="imasculino" checked>
        <label for="masculino">Masculino</label>

        <div>
        <label for="estado">Estado:</label>
            <select name="estado" id="iestado">
                <option value="bahia">Bahia</option>
                <option value="rio_de_janeiro">Rio de Janeiro</option>
                <option value="fortaleza">Fortaleza</option>
                <option value="brasilia">Brasília</option>
            </select>
        </div>

        <input type="checkbox" name="cax" id="icax" required>
        <label for="text">Eu li e concordo com estes termos e condições.</label>

        <div>
            <input type="reset" value="Limpar">
            <input type="submit" value="Cadastrar">  
        </div>
</body>
</html>