<?php

require_once '../app/libs/PdoCrud.php';
require_once '../app/models/LoginModel.php';

$loginModel= new LoginModel(new PdoCrud('localhost','root','Pit2018mtv#@','BALANZA'));
$loginModel->logout();
$loginModel->detachMySql();
header('Location: '.Config::getUrl().'/login');

?>