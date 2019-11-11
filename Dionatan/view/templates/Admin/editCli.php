<?php
    $message = $data['msg'];
    $clien = $data['clien'];
?>
<div class="direita">
		<h1 class="page-header">Editar Cliente</h1>
		<form role="form"  method="post">
            <div>
				<label>Nome do Cliente</label>
                <input name="nome" value="<?php echo $clien->getNome()?>">
            </div>
            <div>
				<label>Endereço</label>
                <textarea name="endereco" rows="3"><?php echo $clien->getEndereco()?></textarea>
            </div>
            <input type="hidden" value="<?php echo $clien->getIdcliente() ?>" name="id">
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

  <div class="tam"></div>
