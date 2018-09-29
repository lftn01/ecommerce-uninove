<?php

namespace App\Http\Controller;

use \Twig_Environment;
use \Twig_Loader_Filesystem;

class Controller{

    private $twig;

    function __construct(){

        $this->twig = new Twig_Environment(new Twig_Loader_Filesystem(ROOT.'/Views'), [
            //'cache' => ROOT.'/Twig/compilation_cache',
        ]);
    }

    public function getTwig(){
        return $this->twig;
    }
}
