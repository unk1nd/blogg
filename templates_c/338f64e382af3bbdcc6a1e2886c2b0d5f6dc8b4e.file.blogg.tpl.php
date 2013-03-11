<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 14:53:41
         compiled from "./templates/blogg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1225674144513de1e5850946-73340988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338f64e382af3bbdcc6a1e2886c2b0d5f6dc8b4e' => 
    array (
      0 => './templates/blogg.tpl',
      1 => 1363009836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225674144513de1e5850946-73340988',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
		<?php  $_smarty_tpl->tpl_vars['innlegg'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blogg_poster')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['innlegg']->key => $_smarty_tpl->tpl_vars['innlegg']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['innlegg']->key;
?>
		<div class="innlegg">
	
			<h3><?php echo $_smarty_tpl->tpl_vars['innlegg']->value['tittel'];?>
</h3>
			<div class="innleggdato">
				Dato: <?php echo $_smarty_tpl->tpl_vars['innlegg']->value['dato'];?>

			</div>
			<?php echo $_smarty_tpl->tpl_vars['innlegg']->value['tekst'];?>

		</div>	
		<?php }} ?>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>