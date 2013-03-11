<?php
session_start();


    require('libs/Smarty.class.php');
    require ('blogg.class.php');    
    require ('innlegg.class.php'); 
    $smarty = new Smarty;

//      Til hjelp dersom du plages med Smarty
//     $smarty->debugging = true;

    if((isset($_POST['tittel']) ? $_POST['tittel'] : '') && (isset($_POST['tekst']) ? $_POST['tekst'] : '')) {
        
        $innlegg = new innlegg($_POST['tittel'], $_POST['tekst']);
        $blogg = new blogg('blogg.xml', $smarty);
        $blogg->addToFile($innlegg);
		//var_dump($innlegg);
        $smarty->assign('melding', 'Takk for din innlegg'); 
    }        

    else {
        $smarty->assign('melding', 'B&aring;de feltene navn og innlegg m&aring; v&aelig;re utfylte'); 

    }
    
    $smarty->display('bloggny.tpl'); 
?>