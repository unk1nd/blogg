<?php /* Smarty version Smarty-3.0.6, created on 2013-03-11 19:04:34
         compiled from "./templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58751707513e1cb20e60a2-14120811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45d8ababa5d6f5c301aa6e6fbb98df40da92477' => 
    array (
      0 => './templates/about.tpl',
      1 => 1363025069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58751707513e1cb20e60a2-14120811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="about">

<img src="http://www.bendiksens.net/new/gallery/pressphoto_bendiksen.jpg" />
	<h1>Om meg</h1>
	<h3>Mikael Bendiksen</h3>
	
	Mitt navn er Mikael Bendiksen.<br />
	Har i oppgave &aring; lage en blogg om meg selv.<br />
	<br />
	Jeg har drevet med programmering av diverse spr&aring;k <br />
	i en mannsalder.<br />
	<br />
	Er ikke akkurat så veldig glad i bruk av Smarty da jeg selv som regel lager mine egene tmp system.
	<br /><br />
	Det påstås jo at smarty er ett bra system som skiller html og php filer.
	Men, smarty gjør ikke ting mye lettere med gjenbruk av kode og ødelegger raskheten med PHP.<br />
	Om du bruker objektorientert programmering og inkluderer html designet hadde webdesignet blitt lastet kun 1 gang og ikke på nytt ved vær link.<br />
	Jeg håper i videre utvikling av denne oppgaven at vi slipper bruket av smarty om vi ønsker dette<br /><br />
	Tilogmed <a href="http://smarty.php.net/">PHP.net</a> har tatt avstand fra Smarty "rammeverket".
	
	
</div>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>