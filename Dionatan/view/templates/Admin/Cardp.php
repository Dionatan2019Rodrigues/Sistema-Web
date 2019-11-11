<!--	 <div class="direita">
	    <table border="1px" style="margin-top:15%;margin-bottom:15%; margin-left:30%;margin-right:30%;">
		   <tr><th>Lista de Produtos</th><th>Img</th><th>Preço</th><th>Descrição</th><th>Editar</th><th>Deletar</th>
		   <tr><td>Prod01</td><td>a.jpg</td><td>R$00,00</td><td>Intro</td><td><a href="edit.html">Icon</a></td><td>Icon</td></tr>
		   <tr><td>Prod02</td><td>a.jpg</td><td>R$00,00</td><td>Intro</td><td><a href="edit.html">Icon</a></td><td>Icon</td></tr>
		   <tr><td>Prod03</td><td>a.jpg</td><td>R$00,00</td><td>Intro</td><td><a href="edit.html">Icon</a></td><td>Icon</td></tr>
		</table>
	 </div>

  </section>
  <div class="tam"></div>-->

  <?php
if($data){
    $list_card = $data['listCard'];
}else{
    $list_card = null;
}

?>

<div class="direita">
    <h1>Administrar Cardápio</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
				<th>Preço</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
                <?php $count = 0;?>
                <?php if($list_card):?>
                    <?php foreach($list_card as $card): ?>
                    <?php $count++; $ccs_class=($count%2==0)?'even':'odd';?>
                        <tr class="<?php echo $ccs_class;?>">
                            <td><?php echo $card->getIdcardapio();?></td>
                            <td><?php echo $card->getNome();?></td>
                            <td><?php echo substr($card->getDescricao(), 0,50);?></td>
							<td><?php echo $card->getPreco();?></td>
                            <td class="center"><a href="<?php echo $this->url?>ACardp/confiCard/<?php echo $card->getIdcardapio();?>"><i class="fa fa-trash">Deletar</i></a></td>
                            <td class="center"><a href="<?php echo $this->url?>ACardp/editCard/<?php echo $card->getIdcardapio();?>"><i class="fa fa-edit">Editar</i></a></td>
                        </tr>

                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
    </table>
</div>
<div class="tam"></div>
