<?php

require_once '../app/libs/PdoCrud.php';
require_once '../app/models/LoginModel.php';

$loginModel= new LoginModel(new PdoCrud('localhost','root','Pit2018mtv#@','BALANZA'));
$validation=$loginModel->validateSession();
$loginModel->detachMySql();

if(!$validation){

    header('Location: '.Config::getUrl().'/login');

}

else{


    
}


?>