<?php /* Smarty version Smarty-3.0.6, created on 2012-02-27 08:53:04
         compiled from ".\templates\visGjestebok.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289954f4b3660988611-53407772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfba48cb2ba9cb179f72404af1f1bf0ab743eb1b' => 
    array (
      0 => '.\\templates\\visGjestebok.tpl',
      1 => 1298555390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289954f4b3660988611-53407772',
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
