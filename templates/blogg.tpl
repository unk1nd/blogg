{include file="header.tpl"}
		
		
		{foreach key=key from=$blogg_poster item=innlegg}
		<div class="innlegg">
	
			<h3>{$innlegg.tittel}</h3>
			<div class="innleggdato">
				Dato: {$innlegg.dato}
			</div>
			{$innlegg.tekst}
		</div>	
		{/foreach}
		
{include file="footer.tpl"}