<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 15:16:53
         compiled from "./templates/bloggskriv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134820648513de75562a937-82125661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c63ff6484699b39088f9e8441d46529110eccc2' => 
    array (
      0 => './templates/bloggskriv.tpl',
      1 => 1363009923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134820648513de75562a937-82125661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
		<form action="blogg_ny.php" method="post">
		Skriv inn tittel<br />
		<input type="text" name="tittel" /><br />
		Skriv inn en tekst<br />
		<textarea name="tekst" cols="25" rows="3">
		</textarea><br />
		<input type="submit" name="ny" value="Legg Inn" />
		<input type="reset" value="Blank ut" /><br />
		<a href="index.php">Se p&aring; innlegg som er skrevet</a>
		</form>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>