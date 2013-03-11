<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 18:50:37
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502288003513e196dde96e5-93624986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1363023960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502288003513e196dde96e5-93624986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title>Webapp - Blogg</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	
	<script>
	function display_alert($s)
  	{
  	alert($s);
  	}
</script>
</head>

<body>
	<div class="container">
		<div class="header">
			<a href="#"><img src="header_tekst.png" alt="headerLOGO"/></a>
		</div>
		
		<div class="meny">
			<?php if ($_SESSION['bruker']){?>
			 <a href="loggout.php">Logg ut</a>
			 <a href="new_blogg.php">Legg til Bloggpost</a> 
			<?php }else{ ?>
			<a href="loggin.php">Logg inn</a>
			<?php }?>
			
			<a href="index.php">Blogg</a>
			<a href="gjestebok.php">Gjestebok</a>
			<a href="utviklere.php">Om Meg</a>
		</div>
		
		<div class="content">