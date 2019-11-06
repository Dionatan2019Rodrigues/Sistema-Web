
    <div class="tam"></div>

    <section class="destaques">

      <div>
        <img  src="<?php echo $this->asset ?>img/prod01.jpg " height="200px" width="250px"/>
        <span>Salame asiático</span><br/>
        <span>R$ 56,00</span>
        <form action="<?php echo $this->url?>card">
           <input type="submit" value="EDITAR CONDIMENTOS">
        </form>
      </div>
	  <div>
        <form action="card.php">
           <input type="submit" value="ADICIONAR PRODUTO">
        </form>
      </div>
      <div>
        <form action="card.php">
           <input type="submit" value="ADICIONAR PRODUTO">
        </form>
      </div>
      <div>
        <form action="card.php">
           <input type="submit" value="ADICIONAR PRODUTO">
        </form>
      </div>

    </section>

    <div class="tam"></div>

	<section id="central">
    <section>

      <form >
         <input type="text" placeholder="endereço">
         <input type="number" min="0" placeholder="n°">
         <input type="text" placeholder="complemento">
      </form>

    </section>

    <section>

      <form >
         <input type="text" placeholder="PONTO DE REFERÊNCIA">
      </form>

    </section>

    <section>

      <form >
         <input type="submit" value="OBTER DESCONTO">
         <input type="submit" value="CANCELAR COMPRAR">
         <input type="submit" value=" FINALIZAR COMPRAR">
      </form>

    </section>
    </section>
    <div class="tam"></div>
