<?php

if(isset($_POST['password'])&&isset($_POST['nickname'])){

    require_once '../app/libs/PdoCrud.php';
    require_once '../app/models/LoginModel.php';

    $nickname=$_POST['nickname'];
    $password=$_POST['password'];

    $loginModel= new LoginModel(new PdoCrud('localhost','root','Pit2018mtv#@','BALANZA'));
    $validation = $loginModel->login($nickname,$password);
    $loginModel->detachMySql();

    if($validation){

        echo('<a href="'.Config::getUrl().'/">HOME</a>');

    }

    else{

        echo('<a href="'.Config::getUrl().'/login">LOGIN</a>');

    }



}

?>