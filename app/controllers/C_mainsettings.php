<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Mainsettings

if(isset($_POST['submit']) && $_POST['submit']=="Submit" )
{
    //`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `rss`, `yt`
    $mainsettings['site_name']      =$_POST['site_name'];
    $mainsettings['site_url']       =$_POST['site_url'];
    $mainsettings['site_desc']      =$_POST['site_desc'];
    $mainsettings['site_email']     =$_POST['site_email'];
    $mainsettings['site_tags']      =$_POST['site_tags'];
    $mainsettings['site_homepanel'] =$_POST['site_homepanel'];
    $mainsettings['fb']             =$_POST['fb'];
    $mainsettings['tw']             =$_POST['tw'];
    $mainsettings['rss']            =$_POST['rss'];
    $mainsettings['yt']             =$_POST['yt'];

 
    try {
    include (dirname(__FILE__)  .'/../models/Awebarts.php');
    include (dirname(__FILE__)  .'/../models/Add.php');
    $mainsetting=new Add($mainsettings,"main_settings");
    if($mainsetting == TRUE)
    {
       header("Location:../index.php");
    } 
    } catch (Exception $exc) {
        echo $exc->getMessage();
    } 
}
else
{
    
    try {
    include "models/Awebarts.php";
    include "models/Display.php";
    
    $data = new Display("main_settings"); 
  $displayData=$data->getData();
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
 include "views/v_mainsettings.php";
}
?>