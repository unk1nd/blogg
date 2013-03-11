<html>
<head>
<title>Test Smarty</title>
</head>
<body>

<select name=user">
{html_options values=$id output=$names selected="5"}
</select>

Alternativt:
<select name="user">
{foreach key=key from=$names item=name}
          <option value={$key+1}>{$name} </option>
{/foreach}
</select>


</body>
</html>
