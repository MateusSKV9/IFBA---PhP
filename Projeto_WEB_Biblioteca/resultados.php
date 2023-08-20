<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include('header.php') ?>
    
    <h1>Livros Disponíveis</h1>

    <?php 
    if(isset($_GET['livro'])) {  // criar página 
        include('banco.php');

        $pesquisa=$_GET['livro'];

        foreach($livros as $livro) {
            if($pesquisa == $livro['id']){
                $livro2 = $livro;
            }
        }
    ?>
        <section class="flexR">

        <?php if($livro2) {?>
            <div id="resultado">
                <?php echo '<h1><strong>Nome: '.$livro2['nome'].'</h1></strong><br>';
                echo '<img src="'.$livro2['foto'].'" alt="'.'Foto do item"'.' id="'.'resultado"'.'><br>'; 
                echo '<li><strong>Data de Lançamento:</strong> '.date('d-m-Y', strtotime($livro['data'])).'<br></li>';
                echo '<li><strong>Total de páginas: </strong>250</li>';
                echo '<li><strong>ID: </strong> '.$livro['id'].'<br></li>';
                echo '<li><strong>Sinopse:</li></strong><p id="'.'sinopse"'.' style="'.'text-align: justify; padding: 5px; color: white;"'.'>'.$livro2['sinopse'].'</p>'; 
                ?>           
        <?php } else {
            echo "<h2><strong>Nenhum item foi encontrado.</strong></h2>";
        }?> </div>

        </section>
        </main>
    <?php } ?>
    
        <h3 id="inicial"><button id="inicial"><a href="index.php">Página inicial</a></button></h3>

    <?php include('footer.php') ?>
</body>
</html>