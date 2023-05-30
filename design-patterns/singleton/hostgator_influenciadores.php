<?php


//Esta classe terá apenas UMA instância, e com isso, iremos criar um método para adicionar canais do youtube dentro desta classe. A ideia por tras do Singleton, é que a própria classe (HostGatorInfluenciadores), carregue a sua própria instância 
class HostGatorInfluenciadores{
    protected static $instance;

     //Atributo responsável por receber os membros 
    private $members = [];

    private function __construct(){

    }

    private function __clone(){

    }

    public function __wakeup(){
        
    }

    /**
     * Método responsável por controlar a instancia da classe. Está retornando o tipo self pois estamos nos referindo a própria classe. 
     * 
     */
    public static function getInstance() : self{
        //Verifica se o atributo isntance está vazio
        if (empty(self::$instance)){
            // Caso esteja vazio, cria a única instância 
            self::$instance = new self();
        }
        return self::$instance;
    }


    /**
     * Método responsável por controlar a entrada de membros no time de incluenciadores. Refiro ao this pois estou me referindo a instância de classe
     */
    public function setMember($members){
        $this -> members = array_merge($this -> members, $members);
    }
}