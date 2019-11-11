<?php

class CardapioDAO extends Model {

    private $listCardapios;

    public function __construct() {
        parent::__construct();
        $this->listaCardapios = [];
    }

    public function getListCardapios() {
        $sql = "SELECT * FROM cardapios";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $cardapio = new Cardapio($linha['nome'], $linha['descricao'], $linha['preco'], $linha['id_cod']);

            $this->listCardapios[] = $cardapio;
        }
        return $this->listCardapios;
    }

    public function getCardapioById($id) {

        $sql = "SELECT * FROM cardapios WHERE id_cod = :id_cod";
        $result = $this->ExecuteQuery($sql, [':id_cod' => $id]);
        if ($result) {

            $card = $result[0];
            return new Cardapio($card['nome'], $card['descricao'], $card['preco'],  $card['id_cod']);
        } else {
            return null;
        }
    }


    public function insereCardapio($card) {
        $sql = "INSERT INTO cardapios(id_cod,nome,descricao,preco) VALUES(:id_cod,:nome,:descricao,:preco)";
        $result = $this->ExecuteCommand($sql,
                [':id_cod' => $card->getIdcardapio(),
                ':nome' => $card->getNome(),
                ':descricao' => $card->getDescricao(),
			':preco' => $card->getPreco(),]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function removerCardapio($id) {
        $sql = "DELETE FROM cardapios WHERE id_cod = :id_cod";
        if($this->ExecuteCommand($sql, [':id_cod'=>$id])){
            return true;
        }else{
            return false;
        }
    }

    public function editcardapio($card) {

    $sql = "UPDATE cardapios SET nome = :nome, descricao = :descricao, preco = :preco  WHERE id_cod = :id_cod";

    $param=[':nome'=>$card->getNome(),
            ':descricao'=>$card->getDescricao(),
			':preco'=>$card->getPreco(),
            ':id_cod'=>$card->getIdcardapio()];

    if($this->ExecuteCommand($sql, $param)){
        return true;
    }else{
        return false;
    }
}

}
