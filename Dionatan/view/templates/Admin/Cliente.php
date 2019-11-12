<?php
if($data){
  $list_clien = $data['listClien'];
}else{
  $list_clien = null;
}

?>
 <div class="direita">
   <h1>Administrar Clientes</h1>
   <table>
       <thead>
           <tr>
               <th>Id</th>
               <th>Nome</th>
               <th>Endereco</th>
               <th colspan="2">Ações</th>
           </tr>
           </thead>
           <tbody>
               <?php $count = 0;?>
               <?php if($list_clien):?>
                   <?php foreach($list_clien as $clien): ?>
                   <?php $count++; $ccs_class=($count%2==0)?'even':'odd';?>
                       <tr class="<?php echo $ccs_class;?>">
                           <td><?php echo $clien->getIdcliente();?></td>
                           <td><?php echo $clien->getNome();?></td>
                           <td><?php echo substr($clien->getEndereco(), 0,50);?></td>
                           <td class="center"><a href="<?php echo $this->url?>ACliente/confiClien/<?php echo $clien->getIdcliente();?>">Deletar</a></td>
                           <td class="center"><a href="<?php echo $this->url?>ACliente/editClien/<?php echo $clien->getIdcliente();?>">Editar</a></td>
                       </tr>

                   <?php endforeach;?>
               <?php endif;?>
           </tbody>
   </table>
	 </div>
</section>
<div class="tam"></div>
