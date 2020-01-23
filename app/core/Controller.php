<?php

class Controller{

    public static function loginManager(){



    }

    public static function logoutManager(){

        $loginModel= new LoginModel(new PdoCrud('localhost','root','feH@haG5822','BALANZA'));
        $loginModel->logout();
        $loginModel->detachMySql();
        
        header("Location: http://localhost/multiva/login");
        die();

    }

    public static function sessionManager(){

        if(isset($_COOKIE['user'])){

            $loginModel = new LoginModel(new PdoCrud('localhost','root','feH@haG5822','BALANZA'));
            $validate = $loginModel->validateSession();
        
            if($validate){
        
                echo('wellcome');
        
            }
        
            else{
        
                header("Location: http://localhost/multiva/login");
                die();
            
            }
        
        }
        
        else{

            header("Location: http://localhost/multiva/login");
            die();
        
        }

    }

    public static function view($view){

        if(!file_exists('../app/views/'.$view.'.php')){

            echo('error 404');

        }

        else{

            require_once('../app/views/'.$view.'.php');

        }

    }

    public static function model($model){

        if(!file_exists('../app/views/'.$model.'.php')){

            echo('error 404');

        }

        else{

            require_once('../app/views/'.$model.'.php');

        }

    }
    
}


?>