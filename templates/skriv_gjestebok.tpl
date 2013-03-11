{include file="header.tpl"}
		
		
  
<form action="gjestebok_ny.php" method="post">
Skriv inn navn<br />
<input type="text" name="tittel" /><br />
Skriv inn hjemmeside<br />
<input type="text" name="web" value="http://" /><br />
Skriv inn en hilsen<br />
<textarea name="tekst" cols="25" rows="3">
</textarea><br />
<input type="submit" name="ny" value="Legg Inn" />
<input type="reset" value="Blank ut" /><br />
<a href="gjestebok.php">Se p&aring; innlegg som er skrevet</a>
</form>

		
{include file="footer.tpl"}