<?php

//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/Primeiro2019';
$config->url = 'http://'.$_SERVER['HTTP_HOST']. $config->base_url;
$config->asset = $config->base_url . 'view/templates/';
$config->template = 'default';
//FTP: senha nome
//Database
if ($_SERVER['HTTP_HOST'] == "localhost") {
    $config->dbuser = 'root'; //nomedoaluno
    $config->dbpassword = ''; //senha
    $config->dbname = 'Primeiro2019'; //nomedoaluno
    $config->dbhost = 'localhost'; //servidor (127.0.0.1)
    $config->dbdrive = 'mysql'; //servidor (127.0.0.1)
} else {
  //VAAAAAAIIIII TEEEEEERRRRR QUEEEEEEE MUUUUUUDDAAAAAAARRRRRR
    $config->dbuser = '2018_dionatan'; //nomedoaluno
    $config->dbpassword = '123'; //senha
    $config->dbname = '2018_dionatan'; //nomedoaluno
    $config->dbhost = '127.0.0.1'; //servidor (127.0.0.1)
    $config->dbdrive = 'mysql'; //servidor (127.0.0.1)
}
