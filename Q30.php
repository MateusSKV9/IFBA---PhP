<?php
$pessoas = [];

function cadastrarPessoa($nome, $cidade, $idade, $sexo) {
    global $pessoas;
    
    $pessoa = [
        'nome' => $nome,
        'cidade' => $cidade,
        'idade' => $idade,
        'sexo' => $sexo
    ];
    
    $pessoas[] = $pessoa;
}

cadastrarPessoa('Mateus', 'Jequié', 19, 'Masculino');
cadastrarPessoa('Gabriela', 'Jequié', 17, 'Feminino');
cadastrarPessoa('Luenne', 'Jequié', 33, 'Feminino');
cadastrarPessoa('James', 'Maracás', 40, 'Masculino');
cadastrarPessoa('Robson', 'Itabuna', 29, 'Masculino');
cadastrarPessoa('Elisabete', 'Conquista', 30, 'Feminino');
cadastrarPessoa('Moura', 'Ilhéus', 28, 'Masculino');
cadastrarPessoa('Karen', 'Maracás', 21, 'Feminino');
cadastrarPessoa('Alexandre', 'Jequié', 23, 'Masculino');
cadastrarPessoa('Maria', 'Ilhéus', 20, 'Feminino');

echo "Listagem de todas as pessoas cadastradas:\n";
foreach ($pessoas as $pessoa) {
    echo "Nome => " . $pessoa['nome'] . "; Cidade => " . $pessoa['cidade'] . "; Idade => " . $pessoa['idade'] . "; Sexo => " . $pessoa['sexo'] . "\n";
}

echo "\nPessoas que moram em Jequié:\n";
foreach ($pessoas as $pessoa) {
    if ($pessoa['cidade'] == 'Jequié') {
        echo $pessoa['nome'] . "\n";
    }
}

echo "\nPessoas com mais de 18 anos:\n";
foreach ($pessoas as $pessoa) {
    if ($pessoa['idade'] > 18) {
        echo $pessoa['nome'] . "\n";
    }
}

$totalMasculino = 0;
foreach ($pessoas as $pessoa) {
    if ($pessoa['sexo'] == 'Masculino') {
        $totalMasculino++;
    }
}
echo "\nQuantidade de pessoas do sexo masculino: " . $totalMasculino . "\n";
?>