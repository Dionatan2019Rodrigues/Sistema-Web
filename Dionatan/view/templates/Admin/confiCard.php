<?php
$card = null;
$message = "Produto não encontrada !!";
if ($data) {
    $message = $data['msg'];
    if (isset($data['card'])) {
        $card = $data['card'];
    }
}
?>
<div class="direita">
    <h1 class="page-header">Administrar Cardápio</h1>
    <div >
      Deletar Produto
    </div>
    <div>
      <?php if ($card): ?>
            <div>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Você realmente quer excluir este item?
            </div>
            <form role="form"  method="post" action='<?php echo $this->url?>ACardp/removeCard/'>
                  <div class="form-group">
                      <label>Nome do Produto</label>
                      <h2><?php echo $card->getNome();?></h2>
                  </div>
                  <div class="form-group">
                      <label>Descrição do Produto</label>
                      <p ><?php echo $card->getDescricao();?></p>
                  </div>
                  <input type="hidden" value="<?php echo $card->getIdcardapio() ?>" name="id">
                  <div class="form-group">
                       <input name="del" type="submit" class="btn btn-danger" value="Deletar">
                       <input name="exit" type="submit" class="btn btn-danger" value="Cancelar">
                  </div>
              </form>
        <?php endif; ?>
        <?php if ($message): ?>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo $message; ?>
                                </div>
                            </div>
         <?php endif; ?>
      </div>
</div>
      <div class="tam"></div>
