<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 15:15:11
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:798242123513de6ef801cc1-62989980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1363009984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798242123513de6ef801cc1-62989980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
			<div class="loggin">
				<form method='post' action='doLogin.php'><br />
					<label>Brukernavn:</label><br /><input type='text' name='username' size='25' /><br />
					<label>Passord:</label><br /><input type='password' name='password' size='25' /><br /><br />
					<input type='submit' value='Logg inn' style='width:120px;' /><br />
				</form>
			</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>