{include file="header.tpl"}
		
		<a href="gjestebok_skriv.php">Skriv i gjestebok?</a><br /><br />
		
		<div class="innlegg">
		{foreach key=key from=$gjestebok_poster item=hilsen}
			<br />
        	{$hilsen.tekst}<br /><br />
        	Skrevet av:<br />
        	<a href="{$hilsen.web}">{$hilsen.tittel}</a> den {$hilsen.dato}<br />
        	<hr />
		{/foreach}
		</div>
		
		
{include file="footer.tpl"}