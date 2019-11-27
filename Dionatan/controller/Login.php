<?php
class Login extends Controller{

    private $texto;

    public function __construct() {
        parent::__construct();

    }

    public function index(){

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('login');
        $this->view->load('footer');
    }

 public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $this->texto;
 }

 public function Loog() {

 $data['msg'] = '';
 if (filter_input(INPUT_POST, 'dele')) {
     $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
     $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
     if($this->model->loogCliente($nome,$senha)){
     }else{
         $data['msg'] ='Erro ao Logar';
     }
 } elseif (filter_input(INPUT_POST, 'exitt')) {

     $this->view->load("header");
     $this->view->load("nav");
     $this->view->load("Home", $data);
     $this->view->load("footer");
     die();

 } else {
     $data['msg'] = 'Erro no formulário!';
 }
 $this->view->load('header');
 $this->view->load('nav');
 $this->view->load('LogNOT', $data);
 $this->view->load('footer');

 }

}
