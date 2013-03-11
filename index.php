<?php
session_start();

require('libs/Smarty.class.php');
require ('blogg.class.php');    
$smarty = new Smarty;
        
$gjestebok = new blogg('blogg.xml', $smarty);
$gjestebok->printFile($smarty);
?>