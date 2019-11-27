<?php
class ALoogin extends Controller{

    private $texto;

    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('Admin');

    }

    public function index(){

        $this->view->load('loogin');
        $this->view->load('footer');
    }

 public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $this->texto;
 }
}
