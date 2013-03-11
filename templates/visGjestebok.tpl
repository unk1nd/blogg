<?xml version="1.0"?>
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

     {foreach key=key from=$gjestebok_poster item=hilsen}
        <h2>{$hilsen.tittel}</h2>
        <blockquote>{$hilsen.tekst}</blockquote>
        Bes&oslash;k min <a href="{$hilsen.web}">hjemmeside</a><br />
        {$hilsen.dato}<br />  
        <hr />
     {/foreach}

  </body>
</html>
