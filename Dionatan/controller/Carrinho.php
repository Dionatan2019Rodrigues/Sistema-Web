<?php
class Carrinho extends Controller{

    private $texto;

    public function __construct() {
        parent::__construct();

    }

    public function index(){

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('carro');
        $this->view->load('footer');
    }

 public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $this->texto;
 }
}
