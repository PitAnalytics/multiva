<?php

class LoginModel{

    protected $mySql;

    //
    public function __construct($mySql){

        $this->attachMySql($mySql);

    }

    //
    public function attachMySql($mySql){

        $this->mySql=$mySql;

    }
    
    //
    public function login($user,$password){

        $validation = $this->mySql->validatePassword("Users","Nickname","Password",$user,$password);

        if($validation === 2){

            //
            $cookieVal['user']=$user;
            $cookieVal['hashcode']='XS8L9H97g0254';

            $ip=$_SERVER['REMOTE_ADDR'];

            //
            $value=json_encode($cookieVal);
            setcookie('user',$value);

            //
            $dml = "UPDATE Users SET Logged = '1', Hashcode = '".$cookieVal['hashcode']."', Ip = '".$ip."' WHERE Nickname = '".$user."' ;";
            $this->mySql->query($dml);

            return true;

        }
        else{

            return false;

        }

    }

    //
    public function validateSession(){

        $userData=json_decode($_COOKIE['user'],true);    
        $ip = $_SERVER['REMOTE_ADDR'];
        $user = $userData['user'];
        $hashcode = $userData['hashcode'];

        if(($this->mySql->validatePassword("Users","Nickname","Hashcode",$user,$hashcode)==2)&&($this->mySql->validatePassword("Users","Nickname","Ip",$user,$ip)==2)){

            return true;

        }

        else{

            return false;

        }
        
    }

    //
    public function logout(){

        if(isset($_COOKIE['user'])){

            $cookieData = json_decode($_COOKIE['user'],true);
            $nickname = $cookieData['user'];
            $dml = "UPDATE Users SET Logged ='0', Hashcode = NULL, Ip = NULL WHERE Nickname = '".$nickname."';";
            $this->mySql->query($dml);
            setcookie('user','',-1);

        }
        
    }

    //
    public function detachMySql(){

        $this->mySql=null;

    }

}

?>