<?php /* Smarty version Smarty-3.0.6, created on 2013-02-26 00:49:36
         compiled from "./templates/visGjestebok.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1408417991512bf890ac0f81-34879352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '158e038c04251729029d04f4925a17f0294d3228' => 
    array (
      0 => './templates/visGjestebok.tpl',
      1 => 1361835606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408417991512bf890ac0f81-34879352',
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
    <title>
      Gjestebok
    </title>
    <meta http-equiv="Content-Type"
    content="text/html; charset=utf-8" />
  </head>
  <body>
    <h3>
      Min hjemmesnekrede XML baserte gjestebok med Smarty templates !
    </h3>

     <?php  $_smarty_tpl->tpl_vars['hilsen'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gjestebok_poster')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['hilsen']->key => $_smarty_tpl->tpl_vars['hilsen']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hilsen']->key;
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['hilsen']->value['tittel'];?>
</h2>
        <blockquote><?php echo $_smarty_tpl->tpl_vars['hilsen']->value['tekst'];?>
</blockquote>
        Bes&oslash;k min <a href="<?php echo $_smarty_tpl->tpl_vars['hilsen']->value['web'];?>
">hjemmeside</a><br />
        <?php echo $_smarty_tpl->tpl_vars['hilsen']->value['dato'];?>
<br />  
        <hr />
     <?php }} ?>

  </body>
</html>
