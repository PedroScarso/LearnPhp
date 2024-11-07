<?php 

    // Orientação a objetos
    // Abstração é representar a ideia em objeto ilustrativo
    // Cada objeto recebe: Entidade, Identidade, Características e Ações
    // Resumidamento a entidade Produto, $prod = new Produto (), mas pode ser qualquer produto, um produto pode obter as seguintes características, categoria, título, descrição e valor. E pode ter também suas próprias ações, como por exemplo: exibirResumoProduto, alterarValorProdutor, alterarValidadeProduto, alterarQuantidadeProduto e etc.

    // Identidade
    class Funcionario {

        //atributos/características
        public $nome = 'Pedro';
        public $telefone = '11 91111-2222';
        public $numFilhos = 0;

        //getters e setters
    function setNome($nome) {
        $this->nome = $nome;

    }
    
    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome() {
       return $this->nome;
    }
    
    function getNumFilhos() {
        return $this->numFilhos;
    }

        //métodos/ações
       /* function resumirCadFunc () {
            return "$this->nome possui $this->numFilhos filho(s), para contato $this->telefone!";
        }

        function modificarNumFilhos ($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }*/
    }

    //instanciando class Funcionario e guardando na variável Y
    /*
    $y = new Funcionario();
    echo $y->resumirCadFunc();

    echo '<hr>';

    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();

    echo '<hr>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();

    echo '<hr>';

    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
    */

    echo '<hr>';

    $a = new Funcionario();
    $a->setNome('Humberto');
    $a->setNumFilhos(1);
    echo $a->getNome() . ' possui ' . $a->getNumFilhos(). ' filho(s)';

    echo '<hr>';

    $b = new Funcionario();
    $b->setNome('Maria');
    $b->setNumFilhos(0);
    echo $b->getNome() . ' possui ' . $b->getNumFilhos(). ' filho(s)';

?>