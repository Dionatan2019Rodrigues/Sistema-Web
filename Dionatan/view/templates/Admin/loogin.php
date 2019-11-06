<html  lang = " en "  dir = " ltr ">
  <head>
    <meta  charset = " utf-8 ">
    <title > Admin </title>
    <link  rel = "stylesheet"  type="text/css"  href = "<?php echo $this->asset ?>css/css.css ">
    <link  rel = "icon"  type="img/png"  href = "<?php echo $this->asset ?>img/icon.png "/>
  </head>
  <body>
    <header>
    <nav  id = "menu">

       <img  id = "logo"  src = "<?php echo $this->asset ?>img/icon.png"  alt=""/>

    </nav>
  </header>


  <section class="tudo">

	 <form action="<?php echo $this->url ?>Admin" style="margin-top:15%;margin-bottom:15%; margin-left:30%;margin-right:30%;">
	    <input type="text" placeholder="email">
		<input type="password" placeholder="senha">
		<input type="submit" value="Entrar">
	 </form>

  </section>
  <footer>
    <div style="height:20px;"></div>
     <p id="footer"> Realizado por Dionatan Rodrigues | 55 55 98426-8328 </p>
     <p id="footer"> Email para contato | dionatanrodrigues351@gmail.com </p>
  </footer>
  </body>
  <!--<script  type="text/javascript" src="js/js.js"> </script>-->
</html>
