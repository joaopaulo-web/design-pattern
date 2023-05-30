<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observer</title>
</head>

<?php

/**
 * interface que declara os métodos "add" e "notify". O "add" é usado para adicionar uma instância da classe "Company" (que também implementa a interface "Company") ao observador. O método "notify" é responsável por notificar os observadores sobre uma mudança de preço.
 */
interface Observer{
    public function add(Company $subject);
    public function notify($price);
}

/**
 * Classe que implementa a interface "Observer". Ela possui uma propriedade privada chamada "$companies" que é um array para armazenar as instâncias da classe "Company". O construtor da classe inicializa o array de empresas.
 */
class StockSim implements Observer {
    private $companies; 

    public function __construct(){
        $this -> companies = array();
    }

    public function add(Company $subject){
        array_push($this -> companies, $subject);
    }

    public function updatePrices(){
        //responsável por atualizar os preços das empresas. Ele simplesmente gera um preço aleatório chamando a função "rand()" e, em seguida, chama o método "notify" para notificar todas as empresas sobre a mudança de preço.
        $this -> notify(rand(23.99, 199.42));
    }
    /**
     * método "notify" implementa o método da interface "Observer" e itera sobre todas as empresas no array "$companies". Para cada empresa, ele chama o método "update" passando o preço atualizado como argumento.
     */
    public function notify($price){
        foreach ($this -> companies as $comp){
            $comp->update($price + rand(23.99, 199.42));
        }
    }
}

/**
 * Definida a interface "Company" que descreve o método "update", que será implementado pelas classes "Google" e "Walmart". Essas classes representam as empresas que serão observadas.
 */
interface Company{

    public function update($price);
}

/**
 * A classe "Google" implementa a interface "Company". Ela possui uma propriedade privada chamada "$price" que representa o preço da empresa. No construtor, é definido o preço inicial da empresa e exibe uma mensagem. 
 */
class Google implements Company {

    private $price;

    public function __construct($price){
        $this -> price = $price;
        echo "<p>Criando empresa Google por: \${$price}</p>";
    }

    /**
     * O método "update" implementa o método da interface "Company" e é chamado pelo objeto observador (nesse caso, a instância da classe "StockSim") para atualizar o preço da empresa Google. O método recebe o novo preço como argumento, atualiza a propriedade "$price" e exibe uma mensagem informando o novo preço da empresa.
     */
    public function update($price){
        $this -> price = $price;
        echo "<p>Empresa Google sendo vendida por: \${$this -> price}</p>";
    }
}


class Walmart implements Company {

    private $price;

    public function __construct($price){
        $this -> price = $price;
        echo "<p>Criando empresa Walmart por: \${$price}</p>";
    }

    public function update($price){
        $this -> price = $price;
        echo "<p>Empresa Walmart sendo vendida por: \${$this -> price}</p>";
    }
}



// Exibição ao Cliente

/**
 * é criada uma instância da classe "StockSim" chamada "$stocksim". Em seguida, são criadas duas instâncias das classes "Google" e "Walmart". Cada uma dessas instâncias representa uma empresa que será observada.
 */
$stocksim = new StockSim();

$comp1 = new Google(19.99);
$comp2 = new Walmart(15.99);

echo "<hr>";

/**
 * "$stocksim->add($comp1)" e "$stocksim->add($comp2)" são chamados para adicionar as empresas observáveis ao objeto observador "$stocksim".
 */
$stocksim -> add($comp1);
$stocksim -> add($comp2);

/**
 * é chamado o método "$stocksim->updatePrices()", que atualiza os preços das empresas e notifica os observadores sobre as mudanças. O método "updatePrices()" gera um novo preço aleatório e chama o método "notify()" do objeto observador "$stocksim", que por sua vez chama o método "update()" de cada empresa adicionada ao observador, passando o novo preço atualizado.
 */
$stocksim -> updatePrices();
