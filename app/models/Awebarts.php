<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Awebarts
 *
 * @author MedAaloui
 */
class Awebarts {
    //varibales
    private $cxn;
    //----------------Connection to database---------------
      function connectToDb()
    {
            include 'Database.php';
          
            $this->cxn = new Database(dirname(__FILE__)  .'/../configs/vars.php');

    }
    //------------------------------------------------------
    //---------------close connection-----------------------
     function close()
         {
             $this->cxn->close();
         }
    //------------------------------------------------------
}
