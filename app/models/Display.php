<?php


class Display extends Awebarts {
    
    private $tablename;
    
    public function  __construct($tablename){
        $this->tablename=$tablename;
        //connection
        $this->connectToDb();
        //get data from database
       $this->getData();
    }
     function getData(){
        $query="SELECT * FROM `$this->tablename`  ORDER BY settings_id DESC LIMIT 1";
        
       $sql=mysql_query($query);
    
        if(!$sql)
        {
            throw new Exception("pas donnee à afficher");
        }
        else{
            $num=mysql_num_rows($sql) or die(mysql_error());
            if($num > 0)
            {
                $data=  mysql_fetch_array($sql);
               
               
            }
           
        }
         return $data;
    }
}
?>