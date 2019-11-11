<?php
$clien = null;
$message = "Cliente não encontrado !!";
if ($data) {
    $message = $data['msg'];
    if (isset($data['clien'])) {
        $clien = $data['clien'];
    }
}
?>
<div class="direita">
    <h1 class="page-header">Administrar Clientes</h1>
    <div >
      Deletar Cliente
    </div>
    <div>
      <?php if ($clien): ?>
            <div>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Você realmente quer excluir este item?
            </div>
            <form role="form"  method="post" action='<?php echo $this->url?>ACliente/removeClien/'>
                  <div class="form-group">
                      <label>Nome do Cliente</label>
                      <h2><?php echo $clien->getNome();?></h2>
                  </div>
                  <div class="form-group">
                      <label>Endereço do Cliente</label>
                      <p ><?php echo $clien->getEndereco();?></p>
                  </div>
                  <input type="hidden" value="<?php echo $clien->getIdcliente() ?>" name="id">
                  <div class="form-group">
                       <input name="dele" type="submit" class="btn btn-danger" value="Deletar">
                       <input name="exitt" type="submit" class="btn btn-danger" value="Cancelar">
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
