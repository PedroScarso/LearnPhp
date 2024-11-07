<?php 

    // Orientação a objetos
    // Abstração é representar a ideia em objeto ilustrativo
    // Cada objeto recebe: Entidade, Identidade, Características e Ações
    // Resumidamento a entidade Produto, $prod = new Produto (), mas pode ser qualquer produto, um produto pode obter as seguintes características, categoria, título, descrição e valor. E pode ter também suas próprias ações, como por exemplo: exibirResumoProduto, alterarValorProdutor, alterarValidadeProduto, alterarQuantidadeProduto e etc.

    // Identidade
    class Funcionario {

        //atributos/características
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

    //métodos/ações básicas
    function resumirCadFunc () {
        return "$this->nome possui $this->numFilhos filho(s), para contato $this->telefone!";
    }

    function modificarNumFilhos ($numFilhos) {
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }
    //métodos/ações básicas



    //usando getters e setters
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function getNome() {
       return $this->nome;
    }
    
    function getNumFilhos() {
        return $this->numFilhos;
    }

    function getCargo() {
        return $this->cargo;
     }

     function getSalario() {
        return $this->salario;
     }
    //usando getters e setters



        
    //Getters e Setters mágicos (overloading de atributos e métodos)
        function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
    //Getters e Setters mágicos (overloading de atributos e métodos)
}


    //instanciando class Funcionario e guardando na variável Y
    echo'<h3>Método simples</h3>';
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

    //instanciando class Funcionario e guardando na variável Y
    

    echo '<hr>';

    //Método Getters/ Setters
    echo'<h3>Método Getters e Setters</h3>';
    $a = new Funcionario();
    $a->setNome('Humberto');
    $a->setNumFilhos(1);
    echo $a->getNome() . ' possui ' . $a->getNumFilhos(). ' filho(s)';

    echo '<hr>';

    $b = new Funcionario();
    $b->setNome('Maria');
    $b->setNumFilhos(0);
    echo $b->getNome() . ' possui ' . $b->getNumFilhos(). ' filho(s)';

    echo '<hr>';

    $a = new Funcionario();
    $a->setNome('Pedro');
    $a->setNumFilhos(0);
    $a->setCargo('Desenvolvedor,');
    $a->setSalario('4.500,00 reais por mês!');
    echo $a->getNome() . ' possui ' . $a->getNumFilhos(). ' filho(s) e tem o cargo de ' . $a->getCargo() . ' também recebe um salário de ' . $a->getSalario();

    //Método Getters/ Setters
    echo'<h3>Método Getters e Setters mágico, overloading de atributos e métodos</h3>';

    $e = new Funcionario();
    $e->__set('nome', 'Scarso');
    $e->__set('numFilhos', 0);
    $e->__set('cargo', 'Desenvolvedor PHP');
    $e->__set('salario', '4.500,00 reais');
    $e->__set('telefone', '4002-8922');

    echo $e->__get('nome') . ' possui um total de ' . $e->__get('numFilhos') . ' Filho(s), trabalha como ' . $e->__get('cargo') . ' e recebe um valor de ' . $e->__get('salario') . ' por mês, para entrar em contato, segue seu número de celular: ' . $e->__get('telefone') . '!';

    //Getters e Setters mágicos (overloading de atributos e métodos)
?>