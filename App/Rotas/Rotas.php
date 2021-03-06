<?php

namespace App\Rotas;

class Rotas{

    private $uri;
    private $nao_encontrado;

    function __construct(){
        $this->uri = str_replace("/index.php", "", $_SERVER['PHP_SELF']);
        $this->nao_encontrado = true;
    }

    public function get($rota, $controller){
        if($rota == $this->uri){
            $controller_metodos = explode("@", $controller);
            $minha_classe = "App\Http\Controller\\".$controller_metodos[0];
            require_once "/App/Http/Controller/Controller.php";
            require_once "/".str_replace("\\","/", $minha_classe).".php";
            $classe = new $minha_classe;
            $classe->$controller_metodos[1]();
            $this->nao_encontrado = false;
        }
    }

    public function get404(){
        if($this->nao_encontrado)
            include ROOT."/Views/404.html";
    }
}
