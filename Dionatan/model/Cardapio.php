
<?php

class Cardapio extends Model {

    private $nome;
    private $descricao;
	  private $preco;
    private $idcardapio;

    public function __construct($nome, $descricao, $preco,$idcardapio=null) {
        $this->nome = $nome;
        $this->descricao = $descricao;
		    $this->preco = $preco;
        $this->idcardapio = $idcardapio;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

	function getDescricao() {
        return $this->descricao;
    }

    function getIdcardapio() {
        return $this->idcardapio;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

	function setPreco($preco) {
        $this->preco = $preco;
    }

    function setIdcardapio($idcardapio) {
        $this->idcardapio = $idcardapio;
    }

}
