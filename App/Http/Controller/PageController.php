<?php

namespace App\Http\Controller;

class PageController extends Controller{

    public function index(){
        echo $this->getTwig()->render('Pages/index.php');
    }

    public function home(){
        echo $this->getTwig()->render('Pages/home.php', [
            'id' => '1',
            'nome' => 'Felipe'
        ]);
    }

    public function contato(){
        echo $this->getTwig()->render('Pages/contato.php');
    }
}
