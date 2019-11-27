<?php
    session_start();
    include('Model.calss.php');

    if(empty($_POST['loog'] || $_POST['seen'])){
        header('Location: Admin.php');
        exit();
    }
 ?>
