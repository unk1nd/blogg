<?
session_start();

if($_SESSION['bruker'] != "adminZ00rkonGe")
{
	header("location: loggin.php");
}

else
{
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->display('bloggskriv.tpl'); 
}

?>