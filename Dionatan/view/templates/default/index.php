   <section>
      <img src="<?php echo $this->asset ?>img/pizza.jpg"  width="100%" height="750px" alt =""/>
   </section>

   <div class="tam"></div>
   <h2>Área do jogo</h2>
   <section id="margin">

      <canvas id="canvas" width="500" height="400"></canvas>
      <!--<img src="<?php echo $this->asset ?>img/jogo.png" width="100%" alt =""/>-->
   </section>

   <div class="tam"></div>

    <section>

    <div class="destaques">
      <div>
        <img  src="<?php echo $this->asset ?>img/prod01.jpg " height="200px" width="250px"/>
        <span>Salame asiático</span><br/>
        <span>R$ 56,00</span>
		<form action="<?php echo $this->url ?>Carrinho">
           <input type="submit" value="COMPRAR">
        </form>
      </div>
      <div>
        <img  src="<?php echo $this->asset ?>img/prod02.jpg" height="200px" width="250px"/>
        <span>Pizza Vegana</span><br/>
        <span>R$ 40,00</span>
		<form action="<?php echo $this->url ?>Carrinho">
           <input type="submit" value="COMPRAR">
        </form>
      </div>
      <div>
        <img  src="<?php echo $this->asset ?>img/prod03.jpg" height="200px" width="250px"/>
        <span>Calabresa</span><br/>
        <span>R$ 45,00</span>
		<form action="<?php echo $this->url ?>Carrinho">
           <input type="submit" value="COMPRAR">
        </form>
      </div>
      <div>
        <img  src="<?php echo $this->asset ?>img/prod04.jpg" height="200px" width="250px"/>
        <span>Quatro Queijos</span><br/>
        <span>R$ 35,00</span>
		<form action="<?php echo $this->url ?>Carrinho">
           <input type="submit" value="COMPRAR">
        </form>
      </div>
    </div>

    </section>

    <div class="tam">  </div>
