<?php

namespace App\Http\Controller;

class PageController extends Controller{
    public function home(){
        echo $this->getTwig()->render('home.html');
    }
}
