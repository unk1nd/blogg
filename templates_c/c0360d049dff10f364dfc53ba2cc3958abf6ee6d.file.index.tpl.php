<?php /* Smarty version Smarty-3.0.6, created on 2013-02-26 01:32:26
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751247915512c029ad96846-34363870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1361838703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751247915512c029ad96846-34363870',
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
	
</head>

<body>
	<div class="container">
		<div class="header">
			<a href="#"><img src="header_tekst.png" /></a>
		</div>
		
		<div class="meny">
		
			<a href="?cmd=loggin">Logg inn</a> 
			<a href="?cmd=blogg">Blogg</a>
			<a href="?cmd=gjestebok">Gjestebok</a>
			<a href="?cmd=oppgave">Oppgaven</a>
			<a href="?cmd=utviklere">Utviklere</a>
		</div>
		
		<div class="content">
		
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
			
		</div>
		
		<div class="footer">

			<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
			<a href="http://www.bendiksens.net"><img style="border:0;width:88px;height:31px" src="http://bendiksens.net/new/images/pwd_by_unk.jpg" alt="Valid Bendiksens!" /></a>
		
		</div>
		
	</div>
	
</body>


</html>