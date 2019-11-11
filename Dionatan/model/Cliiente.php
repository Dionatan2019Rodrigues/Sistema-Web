
<?php

class Cliiente extends Model {

    private $nome;
    private $endereco;
    private $idcliente;

    public function __construct($nome, $endereco,$idcliente=null) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->idcliente = $idcliente;
    }

    function getNome() {
        return $this->nome;
    }

	function getEndereco() {
        return $this->endereco;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

}
