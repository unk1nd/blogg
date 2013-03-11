<?
session_start();


if($_SESSION['bruker'] != "adminZ00rkonGe")
{
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->display('login.tpl'); 		
}
else {
	header("location: index.php");
}

?>
