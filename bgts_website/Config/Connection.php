<?php 
//Session start
session_start();
    
define('SITEURL','http://localhost/Unknown/');

$con = new mysqli ("localhost","root","","village-manegment");

if(!$con){
    echo"Not connected";
}

?>