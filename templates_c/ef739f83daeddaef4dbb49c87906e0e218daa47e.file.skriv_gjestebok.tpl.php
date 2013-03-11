<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 15:47:10
         compiled from "./templates/skriv_gjestebok.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198284264513dee6ee95208-73102963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef739f83daeddaef4dbb49c87906e0e218daa47e' => 
    array (
      0 => './templates/skriv_gjestebok.tpl',
      1 => 1363010006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198284264513dee6ee95208-73102963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
  
<form action="gjestebok_ny.php" method="post">
Skriv inn navn<br />
<input type="text" name="tittel" /><br />
Skriv inn hjemmeside<br />
<input type="text" name="web" value="http://" /><br />
Skriv inn en hilsen<br />
<textarea name="tekst" cols="25" rows="3">
</textarea><br />
<input type="submit" name="ny" value="Legg Inn" />
<input type="reset" value="Blank ut" /><br />
<a href="gjestebok.php">Se p&aring; innlegg som er skrevet</a>
</form>

		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>