<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Add
 *
 * @author MedAaloui
 */
class Add extends Awebarts {
    //put your code here
    private $data;
    private $tablename;
    function  __construct($data,$tablename){
        $this->data=$data;
        $this->tablename=$tablename;
        
        $this->connectToDb();
        $this->AddDATA();
    }
    private function AddDATA()
    {
        foreach($this->data as $key =>$value){
           $keys[]=$key;
           $values[]=$value;
        }
        
        $tblKeys=implode($keys,",");
        $dataValues='"'.implode($values,'","').'"';
        
       
        $query="INSERT INTO $this->tablename ($tblKeys) values ($dataValues)";
       if($sql=mysql_query($query))
       {
            return TRUE ;
        }
        else{
            throw new Exception("données pas inséréés");
            return FALSE;
        }
        
    }
    
    }
