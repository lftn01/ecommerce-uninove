<?php

namespace App\Rotas;

class Rotas{

    private $uri;

    function __construct($uri){
        $this->uri = $uri;
    }

    public function get($rota, $controller){
        if($rota == $this->uri){
            $controller_metodos = explode("@", $controller);
            $minha_classe = "App\Http\Controller\\".$controller_metodos[0];
            require_once "/App/Http/Controller/Controller.php";
            require_once "/".str_replace("\\","/", $minha_classe).".php";
            $classe = new $minha_classe;
            $classe->$controller_metodos[1]();
        }
    }
}
