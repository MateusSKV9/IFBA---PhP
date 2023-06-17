<?php
$cidades = [];

function cadastrarCidade($nome, $estado, $totalHabitantes) {
    global $cidades;
    $cidade = [
        'nome' => $nome,
        'estado' => $estado,
        'totalHabitantes' => $totalHabitantes
    ];
    $cidades[] = $cidade;
}

cadastrarCidade('Salvador', 'Bahia', 2900319);
cadastrarCidade('Vitória da Conquista', 'Bahia', 341128);
cadastrarCidade('Pompéu', 'Minas Gerais', 32035);
cadastrarCidade('Penápolis', 'São Paulo', 63757);
cadastrarCidade('Jitaúna', 'Bahia', 11166);
cadastrarCidade('Nova Canaã', 'Bahia', 16472);
cadastrarCidade('Vila Velha', 'Espírito Santo', 501325);
cadastrarCidade('São Cristóvão', 'Sergipe', 92090);

echo "\n";
echo "Listagem de todas as cidades: \n";
foreach($cidades as $cidade) {
    echo "Nome => " . $cidade['nome'] . "; " . "Estado => " . $cidade['estado'] . "; " . "Quantidade de habitantes => " . $cidade['totalHabitantes'] . "\n";
}

echo "\n";
echo "Cidades com mais de 50.000 habitantes: \n";
foreach($cidades as $cidade) {
    if($cidade['totalHabitantes'] > 50000) {
        echo $cidade['nome'] ."\n";
    }
}
?>