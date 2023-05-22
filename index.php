<?php
    class Pessoa{
        public $nome;
        public $idade;
        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function ViewPessoa(){
            echo $this->nome;
            echo $this->idade;
            echo '<hr>';
        }
    }

    $pessoa = new Pessoa('thomas', 18);
    $pessoa->ViewPessoa();
    $pessoa = new Pessoa('thomas', 18);
    $pessoa->ViewPessoa();

    
$pessoas = array(); // Cria um array vazio para armazenar as pessoas

// CREATE: Adiciona uma nova pessoa ao array
function adicionarPessoa($nome, $idade) {
    global $pessoas;
    $pessoa = new Pessoa($nome, $idade);
    $pessoas[] = $pessoa;
}

// READ: Obtém todas as pessoas no array
function obterPessoas() {
    global $pessoas;
    return $pessoas;
}

// UPDATE: Atualiza os dados de uma pessoa no array
function atualizarPessoa($index, $nome, $idade) {
    global $pessoas;
    if (isset($pessoas[$index])) {
        $pessoas[$index]->nome = $nome;
        $pessoas[$index]->idade = $idade;
        return true;
    }
    return false;
}

// DELETE: Remove uma pessoa do array
function removerPessoa($index) {
    global $pessoas;
    if (isset($pessoas[$index])) {
        unset($pessoas[$index]);
        $pessoas = array_values($pessoas); // Reindexa o array
        return true;
    }
    return false;
}

// Exemplo de uso:

// Adiciona duas pessoas ao array
adicionarPessoa('Thomas', 18);
adicionarPessoa('João', 25);

// Obtém todas as pessoas
$listaPessoas = obterPessoas();
foreach ($listaPessoas as $pessoa) {
    echo $pessoa->nome . ' - ' . $pessoa->idade . '<br>';
}

// Atualiza os dados da pessoa na posição 1
atualizarPessoa(1, 'Maria', 30);

// Obtém todas as pessoas novamente para verificar a atualização
$listaPessoas = obterPessoas();
foreach ($listaPessoas as $pessoa) {
    echo $pessoa->nome . ' - ' . $pessoa->idade . '<br>';
}

// Remove a pessoa na posição 0
removerPessoa(0);

// Obtém todas as pessoas novamente após a remoção
$listaPessoas = obterPessoas();
foreach ($listaPessoas as $pessoa) {
    echo $pessoa->nome . ' - ' . $pessoa->idade . '<br>';
}
    
?>