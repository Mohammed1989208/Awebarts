<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author MedAaloui
 */
class Register extends Awebarts{
    private $username;
    private $password;
    private $email;
    private $cnx;
 
    function __construct($username,$password,$email){       
        $this->setData($username,$password, $email); 
        $this->connectToDb();
        $this->registerData();
        $this->close();
    }
     function setData($username,$password, $email){
    $this->username =$username;
    $this->password =$password;
    $this->email    =$email;
}
   
   function registerData(){
    $query="INSERT INTO `users` (`id`,`username`,`password`,`email`)  VALUES (' ','$this->username','$this->password','$this->email')";
   
    $sql=mysql_query($query);
    if($sql) 
        {
         return TRUE;
         
        
        }
    else {echo "koko";}
}

}
