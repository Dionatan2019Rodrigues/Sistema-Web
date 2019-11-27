      <div id="Login">
        <div class="tam"></div>
        <img src="<?php echo $this->asset ?>img/login.jpg" height="110px"/>
        <form action="<?php echo $this->url ?>Home" method="POST">
          <div class="tam"></div>
          <input type="text" name="login" placeholder="Login">
          <input type="password" name="senha" placeholder="Senha"/>
          <input id="face"type="submit" value="Facebook"/>
          <input id="gm"type="submit" value="Email"/>
          <a href="<?php echo $this->url?>Login/Loog/<?php echo $clien->getIdcliente();?>">Deletar</a>

        </form>
      </div>
    </div>

    <div class="tam"></div>  <div class="tam">  </div>
    <div class="tam"></div>  <div class="tam">  </div>
