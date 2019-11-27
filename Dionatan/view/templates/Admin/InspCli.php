<?php
$message = $data['msg'];
?>

<div class="direita">
		<h1>Inserir novo Cliente</h1>
		<form role="form"  method="post">
          <div>
              <input type="text" placeholder="Nome do Cliente" name="nome">
          </div>
		  <p></p>
          <div>
              <textarea name="endereco" placeholder="Endereço do Cliente" class="form-control" rows="3"></textarea>
          </div>
		  <p></p>
		     	<div>
					      <textarea name="senha" placeholder="Senha do Cliente" class="form-control" rows="3"></textarea>
			    </div>
	    <p></p>
          <div>
              <input name="add" type="submit" class="btn btn-primary" value="Cadastrar">
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
