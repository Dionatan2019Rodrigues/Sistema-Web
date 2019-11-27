
<?php

class Cliiente extends Model {

    private $nome;
    private $endereco;
    private $senha;
    private $idcliente;

    public function __construct($nome, $endereco,$senha,$idcliente=null) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->senha = $senha;
        $this->idcliente = $idcliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
          return $this->endereco;
    }

    function getSenha() {
            return $this->senha;
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

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

}
