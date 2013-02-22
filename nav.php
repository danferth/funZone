<ul id="nav">
<?php
foreach($nav as $x){
		printf ("<li><a href=\"index.php?page=%s\">%s</a></li>\n",$x['url'],$x['name']);
	}
?>
</ul>
