<?php
    $message = $data['msg'];
    $card = $data['card'];
?>
<div class="direita">
		<h1 class="page-header">Editar Produto</h1>
		<form role="form"  method="post">
            <div>
				<label>Nome do Produto</label>
                <input name="nome" value="<?php echo $card->getNome()?>">
            </div>
            <div>
				<label>Descrição</label>
                <textarea name="descricao" rows="3"><?php echo $card->getDescricao()?></textarea>
            </div>
			<div>
				<label>Preço do Produto</label>
                <input name="preco" type="number" value="<?php echo $card->getPreco()?>">
            </div>
            <input type="hidden" value="<?php echo $card->getIdcardapio() ?>" name="id">
            <div class="form-group">
                <input name="edit" type="submit" class="btn btn-primary" value="Salvar">
                <input name="exit" type="submit" class="btn btn-danger" value="Cancelar">
            </div>
            <?php if ($message): ?>
                <div class="form-group">
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $message; ?>
                    </div>
                </div>
            <?php endif; ?>
        </form>
	 </div>
 </section>
  <div class="tam"></div>
