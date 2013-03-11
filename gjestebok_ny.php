<?php

    require('libs/Smarty.class.php');
    require ('guestbook.class.php');    
    require ('hilsen.class.php'); 
    $smarty = new Smarty;

//      Til hjelp dersom du plages med Smarty
//      $smarty->debugging = true;

    if((isset($_POST['tittel']) ? $_POST['tittel'] : '') && (isset($_POST['tekst']) ? $_POST['tekst'] : '')) {
        //var_dump($_POST);
        $hilsen = new hilsen($_POST['tittel'], $_POST['tekst'], $_POST['web']);
        $gjestebok = new guestbook('gjestebok.xml', $smarty);
        $gjestebok->addToFile($hilsen);

        $smarty->assign('melding', 'Takk for din hilsen'); 
    }        

    else {
        $smarty->assign('melding', 'B&aring;de feltene navn og hilsen m&aring; v&aelig;re utfylte'); 

    }
    
    $smarty->display('gjestebokny.tpl'); 
?>