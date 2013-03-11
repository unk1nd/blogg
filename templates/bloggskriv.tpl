{include file="header.tpl"}
		
		
		<form action="blogg_ny.php" method="post">
		Skriv inn tittel<br />
		<input type="text" name="tittel" /><br />
		Skriv inn en tekst<br />
		<textarea name="tekst" cols="25" rows="3">
		</textarea><br />
		<input type="submit" name="ny" value="Legg Inn" />
		<input type="reset" value="Blank ut" /><br />
		<a href="index.php">Se p&aring; innlegg som er skrevet</a>
		</form>
		
{include file="footer.tpl"}