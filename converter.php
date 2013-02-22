<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Plasmid Concentration</title>

</head>

<body>
<a href="http://www.unitconversion.org"></a>
<hr />

<!-- WEIGHT CONVERTER START -->
<form name="cat=Weight;focuscolor=blue;focusweight=bold">
<table align=center width=275 border=0 cellpadding=0 cellspacing=0>
<tr>
<td><span name="nanogram" id="nanogram">nanogram</span></td>
<td><input type="text" name="nanogram;base=1">ng</td>
</tr><tr>
<td><span name="microgram" id="microgram">microgram</span></td>
<td><input type="text" name="microgram">&#181;g</td>
</tr>
</table>
</form>

<!-- VOLUME CONVERTER START -->
<form name="cat=Volume;focuscolor=blue;focusweight=bold">
<table align=center width=275 border=0 cellpadding=0 cellspacing=0>
<tr>
<td><span name="microliter" id="microliter">microliter</span></td>
<td><input type=text name="microliter;base=1">&#181;L</td>
</tr><tr>
<td><span name="milliliter" id="milliliter">milliliter</span></td>
<td><input type=text name="milliliter">mL</td>
</tr>
</table>
</form>
<!-- VOLUME CONVERTER END -->
<script src=http://www.unitconversion.org/converter3/converter3.js></script>
<hr />

<form action="result.php" method="get">
<table align="center" border="0" width="600" cellpadding="5" cellspacing="0">
<tr><td>
Plasmid mg/L = 100&mu;L </td><td>x</td><td><input type="text" name="num1" id="num1" size="27" maxlength="" value="miniprep concentration, &mu;g/&mu;L" /></td>
<td>/</td>
<td><input type="text" name="num2" id="num2" size="" maxlength="" value="mL of culture pelleted" /></td>
<td><input type="submit" value="GO" size="5" /></td>
</tr>
</table>
</form>






</body>

</html>
