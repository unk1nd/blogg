<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 18:33:27
         compiled from "./templates/gjestebok_vis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1852624564513e1567988189-52508982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '371cb561dd7d22b7c137f9091002b8a182500837' => 
    array (
      0 => './templates/gjestebok_vis.tpl',
      1 => 1363023177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1852624564513e1567988189-52508982',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		<a href="gjestebok_skriv.php">Skriv i gjestebok?</a><br /><br />
		
		<div class="innlegg">
		<?php  $_smarty_tpl->tpl_vars['hilsen'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gjestebok_poster')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['hilsen']->key => $_smarty_tpl->tpl_vars['hilsen']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hilsen']->key;
?>
			<br />
        	<?php echo $_smarty_tpl->tpl_vars['hilsen']->value['tekst'];?>
<br /><br />
        	Skrevet av:<br />
        	<a href="<?php echo $_smarty_tpl->tpl_vars['hilsen']->value['web'];?>
"><?php echo $_smarty_tpl->tpl_vars['hilsen']->value['tittel'];?>
</a> den <?php echo $_smarty_tpl->tpl_vars['hilsen']->value['dato'];?>
<br />
        	<hr />
		<?php }} ?>
		</div>
		
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>