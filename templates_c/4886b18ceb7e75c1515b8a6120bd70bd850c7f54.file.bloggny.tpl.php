<?php /* Smarty version Smarty-3.0.6, created on 2013-02-26 02:44:49
         compiled from "./templates/bloggny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:422638756512c13913980b5-42832844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4886b18ceb7e75c1515b8a6120bd70bd850c7f54' => 
    array (
      0 => './templates/bloggny.tpl',
      1 => 1361843061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '422638756512c13913980b5-42832844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo '<?xml';?> version="1.0"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta HTTP-EQUIV="REFRESH" content="0; url=index.php">
    <title>
      Gjestebok
    </title>
    <meta http-equiv="Content-Type"
    content="text/html; charset=utf-8" />
  </head>
  <body>
    <h3>
      <?php echo $_smarty_tpl->getVariable('melding')->value;?>

    </h3>
    <p>
        <a href="new_blogg.php">Tilake til gjesteboka</a> 
    </p>
   </body>
</html>

