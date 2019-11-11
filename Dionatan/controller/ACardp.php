<?php
class ACardp extends Admin{

    private $texto;

    public function __construct() {
        parent::__construct();
		
        $this->model = new CardapioDAO();

    }

    public function index(){
		$data['listCard'] = $this->model->getListCardapios();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('Cardp', $data);
        $this->view->load('footer');
    }
	
    public function addCard() {

        $data['msg']="";
        if (filter_input(INPUT_POST, 'add')) {
            $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
            $descricao = filter_input(INPUT_POST, 'descricao',FILTER_SANITIZE_STRING);
			$preco = filter_input(INPUT_POST, 'preco',FILTER_SANITIZE_STRING);

            //var_dump($_POST);die;
            if($nome && $descricao && $preco) {
                if($this->model->insereCardapio(new Cardapio($nome,$descricao,$preco))){
                    $this->view->location('ACardp');
                }else{
                    $data['msg']= "Erro ao cadastrar!!";
                }
            }else{
                $data['msg']= "Preencha todos os campos!";
            }
        }

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('Isnp',$data);
        $this->view->load('footer');
    }
	
	public function editCard($id) {
    $data['card'] = $this->model->getCardapioById($id);
    $data['msg'] = "";

    if (filter_input(INPUT_POST, 'edit')) {
        //ler formulário e atualizar o banco

        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST, 'descricao',FILTER_SANITIZE_STRING);
		$preco = filter_input(INPUT_POST, 'preco');
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

        if ($nome && $descricao && $preco && $id) {
            //atualizar no banco de dados a notícia
            $cardapio = new Cardapio($nome,$descricao, $preco, $id);
            if ($this->model->editcardapio($cardapio)) {
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
    $this->view->load('edit', $data);
    $this->view->load('footer');
}

 /*public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $this->texto;
 }*/
}
