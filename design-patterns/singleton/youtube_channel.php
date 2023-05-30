<?php

//Classe responsável por representar os canais que vão fazer parte do time de influenciadores 
class YoutubeChannel{
    public $name;
    public $username;

    public function __construct($name, $username){
        $this -> name = $name;
        $this -> username = $username;
    }
}