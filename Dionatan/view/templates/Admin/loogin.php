<?php
session_start();
?>
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

	 <form action="<?php echo $this->url ?>Admin" style="margin-top:18%;margin-bottom:18%; margin-left:30%;margin-right:30%;">
	    <input type="text" placeholder="email">
		<input type="password" placeholder="senha">
		<input type="submit" value="Entrar">
	 </form>



<?php
/*  if(isset($_SESSION['nao_autenticado'])):*/
 ?><!--
 <div>
   <p>ERRO: Usuário ou senha inválido!</p>
 </div>-->
 <?php
  /* endif;
   unset($_SESSION['nao_autenticado']);*/
?>
<!--<form action="<?php echo $this->url ?>login02" method="post" style="margin-top:18%;margin-bottom:18%; margin-left:30%;margin-right:30%;">
  <input type="text" name="loog" placeholder="Login">
  <input type="text" name="seen" placeholder="Senha">
  <input type="submit" value="Entrar">
</form>

</section>-->

























<?php  ?>
