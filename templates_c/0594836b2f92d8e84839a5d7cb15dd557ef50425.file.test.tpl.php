<?php /* Smarty version Smarty-3.0.6, created on 2012-02-20 09:35:53
         compiled from ".\templates\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217884f4205e92ae036-42814616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0594836b2f92d8e84839a5d7cb15dd557ef50425' => 
    array (
      0 => '.\\templates\\test.tpl',
      1 => 1329726785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217884f4205e92ae036-42814616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\wd\php\gjestebok\xml-smarty\libs\plugins\function.html_options.php';
?><html>
<head>
<title>Test Smarty</title>
</head>
<body>

<select name=user">
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('id')->value,'output'=>$_smarty_tpl->getVariable('names')->value,'selected'=>"5"),$_smarty_tpl);?>

</select>

Alternativt:
<select name="user">
<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('names')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
          <option value=<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </option>
<?php }} ?>
</select>


</body>
</html>
