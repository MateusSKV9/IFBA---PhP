<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="pag2.php" method="GET">
        <label for="inome">Nome</label>
        <div><input type="text" name="nome" id="inome" required>
        <label for="isob">Sobrenome</label>
        <input type="text" name="sob" id="isob"></div>

        <label for="iemail">Email</label>
        <div><input type="email" name="email" id="iemail">
        <label for="tel">Telefone</label>
        <input type="tel" name="tel" id="itel">
        <label for="idat">Data de Nascimento</label>
        <input type="date" name="dat" id="idat"></div>

        <label for="igenero">Gênero: </label>
        <input type="radio" value="feminino" name="genero" id="ifememino">
        <label for="ifeminino">Feminino</label>
        <input type="radio" value="masculino" name="genero" id="imasculino" checked>
        <label for="imasculino">Masculino</label>

        <br>

        <label for="iend">Endereço</label>
        <input type="text" name="end" id="iend">

        <br>

        <label for="ibai">Bairro</label>
        <input type="text" name="bai" id="ibai" placeholder="Bairro">
        <label for="inum">Número</label>
        <input type="text" name="num" id="inum" placeholder="Número">
        <label for="icep">CEP</label>
        <input type="text" name="cep" id="icep" placeholder="CEP">


        <div><label for="icomp">Complemento</label></div>
        <input type="text" name="comp" id="icomp">

        <div>
        <label for="iestado">Estado:</label>
            <select name="estado" id="iestado">
                <option value="bahia">Bahia</option>
                <option value="rio_de_janeiro">Rio de Janeiro</option>
                <option value="fortaleza">Fortaleza</option>
                <option value="brasilia">Brasília</option>
            </select>
        </div>

        <input type="checkbox" name="cax" id="icax" required>
        <label for="itext">Eu li e concordo com estes termos e condições.</label>

        <div>
            <input class="botoes" type="reset" value="Limpar">
            <input class="botoes" type="submit" value="Cadastrar">  
        </div>
</body>
</html>