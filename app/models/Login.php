<?php

/*
 *Login Class
 * @author unselfish
 */
class Login {
    private $username;
    private $password;
    private $cxn;       //database opject
            
    function __construct($username,$password)
    {
       //set data
       $this->setData($username,$password);
        //connect DB
        $this->connectToDb();
        //get Data
        $this->getData();
      
//        $this->close();
    }
    
    private function setData($username,$password)
    {
        $this->username = $username ;
        $this->password = $password;
    }    
    
    private function connectToDb()
    {
        
            include 'Database.php';
            $vars = '../configs/vars.php';
            $this->cxn = new Database($vars);

    }
    private  function getData()
        {
            $query = "SELECT * FROM users WHERE `username` = '$this->username' AND `password` = '$this->password'";
            $sql   = mysql_query($query);
            mysql_num_rows($sql) or die(mysql_error());
            if(mysql_num_rows($sql)> 0)
            {
                return TRUE;
            }
             else
                 {
              throw new Exception("Username or passowrd is invalid, please try again.");
                 }
         }
          
         function close()
         {
             $this->cxn->close();
         }

    
    
}

?>
