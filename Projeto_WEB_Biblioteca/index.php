<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include('header.php') ?>

    <h1>Livros Disponíveis</h1>
    
        <?php
            include('banco.php');        
        ?>
                <section class="flex">
                    
                <?php 
                    if(isset($_GET['pes'])) {
                        $livro2=[];
                        $pesquisa=$_GET['pes'];

                        foreach($livros as $livro) {
                            if(mb_stripos($livro['nome'], $pesquisa) !== false){
                            $livro2[] = $livro;
                            }
                        } 
                ?>
            
                <?php foreach($livro2 as $livro) { ?>
                    <section id="filtro">
                    <div id="filtro"><form action="resultados.php" method="get">
                        <?php 
                            echo '<input type="'.'hidden"'. 'name="'.'livro" value="'. $livro['id'].'">';
                            echo '<button type="'.'submit" '.'><img src="'.$livro['foto'].'"alt="Foto do item" id="'.'filtro"'.'></button><br>';
                            echo '<li><strong>Nome:</strong> '.$livro['nome'].'<br></li>';
                            echo '<li div="'.'sinopse"'.'><strong>Lançamento:</strong> '.date('d-m-Y', strtotime($livro['data'])).'<br></li>';
                            echo '<li><strong>ID: </strong> '.$livro['id'].'<br></li>';
                        ?>
                    </form></div></section>        
                <?php } ?>
            

            <?php  } else {
                foreach($livros as $livro) { ?>
                    <div>
                        <form action="resultados.php" method="get">
                            <?php
                                echo '<input type="'.'hidden"'. 'name="'.'livro" value="'. $livro['id'].'">';
                                echo '<button type="'.'submit" '.'><img src="'.$livro['foto'].'"alt="Foto do item"></button><br>';
                                echo '<li><strong>Nome:</strong> '.$livro['nome'].'<br></li>';
                                echo '<li><strong>Lançamento:</strong> '.date('d-m-Y', strtotime($livro['data'])).'<br></li>';
                                echo '<li><strong>ID: </strong> '.$livro['id'].'<br></li>';
                            ?>
                        </form></div> 
                <?php } ?>     
            <?php } ?>     
            </section>

            <h3 id="inicial"><button id="inicial"><a href="index.php">Página inicial</a></button></h3>

    <?php include('footer.php'); ?>
</body>
</html>