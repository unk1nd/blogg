<?php
session_start();

require('libs/Smarty.class.php');
require ('guestbook.class.php');    
$smarty = new Smarty;
        
$gjestebok = new guestbook('gjestebok.xml', $smarty);
$gjestebok->printFile($smarty);
?>