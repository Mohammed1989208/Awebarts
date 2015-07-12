<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author MedAaloui
 */
class Database {
    //put your code here
     private $host;
    private $user;
    private $password;
    private $database;
    
    
    function __construct($filename)
    {
        if(is_file($filename)) include $filename;
        else throw new Exception("Error is not a file!!!");

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->connect();       
    }
    private function connect()
    {
        //connect to the server
        if(!mysql_connect($this->host, $this->user, $this->password))
            throw new Exception("Error: not connected to the server.!!!!!!!!!!!!!!");
        else echo "OK";
       
            //select to database
        if(!mysql_select_db($this->database))
            throw new Exception("Error! No database selected!");
        else echo "OK";
    }
    
    function close(){
        mysql_close();
    }
}
