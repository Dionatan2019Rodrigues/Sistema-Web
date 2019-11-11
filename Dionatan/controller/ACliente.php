<?php
class ACliente extends Admin{

    private $texto;

    public function __construct() {
        parent::__construct();

        $this->model = new ClienteDAO();

    }

    public function index(){
    $data['listClien'] = $this->model->getListClientes();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('Cliente', $data);
        $this->view->load('footer');
    }

    public function addClien() {

        $data['msg']="";
        if (filter_input(INPUT_POST, 'add')) {
            $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
            $endereco = filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);

            //var_dump($_POST);die;
            if($nome && $endereco) {
                if($this->model->insereCliente(new Cliiente($nome,$endereco))){
                    $this->view->location('ACliente');
                }else{
                    $data['msg']= "Erro ao cadastrar!!";
                }
            }else{
                $data['msg']= "Preencha todos os campos!";
            }
        }

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('InspCli',$data);
        $this->view->load('footer');
    }

    public function editClien($id) {
      $data['clien'] = $this->model->getClienteById($id);
      $data['msg'] = "";

      if (filter_input(INPUT_POST, 'edit')) {
          //ler formulário e atualizar o banco

          $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
          $endereco = filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);
  		    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

          if ($nome && $endereco &&  $id) {
              //atualizar no banco de dados a notícia
              $cliente = new Cliiente($nome,$endereco, $id);
              if ($this->model->editcliente($cliente)) {
                  $this->index();
                  return true;
              } else {
                  $data['msg'] = "Erro ao atualizar notícia!!";
              }
          } else {
              $data['msg'] = "Preencha todos os campos!";
          }
      } else if (filter_input(INPUT_POST, 'exit')) {
        //  $data['listNews'] = $this->model->getListCardapio();
              $this->index();
          return TRUE;
      }

      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('editCli', $data);
      $this->view->load('footer');
  }

  public function confiClien($id) {
      $data['msg'] = '';
  //        echo "Deletar Cliente: $id";
      $data['clien'] = $this->model->getClienteById($id);
      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('confiClien', $data);
      $this->view->load('footer');
  }

  public function removeClien() {

  $data['msg'] = '';
  if (filter_input(INPUT_POST, 'dele')) {
      $idCliente = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
      if($this->model->removerCliente($idCliente)){
          $data['msg'] ='Cliente excluído com sucesso!';
      }else{
          $data['msg'] ='Erro ao excluir cliente!';
      }
  } elseif (filter_input(INPUT_POST, 'exitt')) {

      $data['listClien'] = $this->model->getListClientes();

      $this->view->load("header");
      $this->view->load("nav");
      $this->view->load("Cliente", $data);
      $this->view->load("footer");
      die();

  } else {
      $data['msg'] = 'Erro no formulário!';
  }
  $this->view->load('header');
  $this->view->load('nav');
  $this->view->load('removeClien', $data);
  $this->view->load('footer');

  }

/* public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $this->texto;
 }*/
}
