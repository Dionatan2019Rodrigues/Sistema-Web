<?php

class ClienteDAO extends Model {

    private $listClientes;

    public function __construct() {
        parent::__construct();
        $this->listaClientes = [];
    }

    public function getListClientes() {
        $sql = "SELECT * FROM cliente";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $cliente = new Cliiente($linha['nome'], $linha['endereco'], $linha['senha'], $linha['id_cli']);

            $this->listClientes[] = $cliente;
        }
        return $this->listClientes;
    }

    public function getClienteById($id) {

        $sql = "SELECT * FROM cliente WHERE id_cli = :id_cli";
        $result = $this->ExecuteQuery($sql, [':id_cli' => $id]);
        if ($result) {

            $clien = $result[0];
            return new Cliiente($clien['nome'], $clien['endereco'], $clien['senha'],  $clien['id_cli']);
        } else {
            return null;
        }
    }

    public function insereCliente($clien) {
        $sql = "INSERT INTO cliente(id_cli,nome,endereco,senha) VALUES(:id_cli,:nome,:endereco,:senha)";
        $result = $this->ExecuteCommand($sql,
                [':id_cli' => $clien->getIdcliente(),
                ':nome' => $clien->getNome(),
                ':endereco' => $clien->getEndereco(),
                ':senha' => $clien->getSenha(),]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function removerCliente($id) {
        $sql = "DELETE FROM cliente WHERE id_cli = :id_cli";
        if($this->ExecuteCommand($sql, [':id_cli'=>$id])){
            return true;
        }else{
            return false;
        }
    }

    public function editcliente($clien) {

    $sql = "UPDATE cliente SET nome = :nome, endereco = :endereco, senha = :senha WHERE id_cli = :id_cli";

    $param=[':nome'=>$clien->getNome(),
            ':endereco'=>$clien->getEndereco(),
            ':senha'=>$clien->getSenha(),
            ':id_cli'=>$clien->getIdcliente()];

    if($this->ExecuteCommand($sql, $param)){
        return true;
    }else{
        return false;
    }
}

}
