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
                            <td class="center"><a href="<?php echo $this->url?>ACardp/confiCard/<?php echo $card->getIdcardapio();?>">Deletar</a></td>
                            <td class="center"><a href="<?php echo $this->url?>ACardp/editCard/<?php echo $card->getIdcardapio();?>">Editar</a></td>
                        </tr>

                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
    </table>
</div>
</section>
<div class="tam"></div>
