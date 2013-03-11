<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title>Webapp - Blogg</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	
	<script>
	function display_alert($s)
  	{
  	alert($s);
  	}
</script>
</head>

<body>
	<div class="container">
		<div class="header">
			<a href="#"><img src="header_tekst.png" alt="headerLOGO"/></a>
		</div>
		
		<div class="meny">
			{if $smarty.session.bruker}
			 <a href="loggout.php">Logg ut</a>
			 <a href="new_blogg.php">Legg til Bloggpost</a> 
			{else}
			<a href="loggin.php">Logg inn</a>
			{/if}
			
			<a href="index.php">Blogg</a>
			<a href="gjestebok.php">Gjestebok</a>
			<a href="utviklere.php">Om Meg</a>
		</div>
		
		<div class="content">