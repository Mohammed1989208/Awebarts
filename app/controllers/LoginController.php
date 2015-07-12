<?php

/* 
 * awebarts:: LoginController
 */

if ($_POST)
{
    if(isset($_POST['submit']) AND $_POST['submit'] == "Login" )
    {
     $username = $_POST['username'];
     $password = $_POST['password'];
      
     try
     {
        
         include '../models/Login.php';
          
         $login = new Login($username,$password);
//  var_dump($login);
//  exit;
         if ($login == TRUE)
         {
    
             session_start();
             $_SESSION['username'] = $username;
             header('Location:../index.php');
         }
     }
     catch (Exception $exc)
     {
        echo $exc->getMessage();
     }
      
    }
//Register
 if(isset($_POST['submit']) AND $_POST['submit'] == "Register" )
{
    $username   =$_POST["username"];
    $password   =$_POST["password"];
    $email      =$_POST["email"];
    
    try {
         include  '../models/Awebarts.php';
          include  '../models/Register.php';
         $register=new Register($username,$password, $email); 
         
         if($register==TRUE)
         {
           header('Location:../login.php');  
         }
        } catch (Exception $exc) {
          echo $exc->getMessage();
        }
}
}
?>
