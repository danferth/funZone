<?php
	//$page = $_GET['page'];
	include('sitedb.php');
	if (!empty($page)) {
		if(in_array($page,$pages)) {
			$page .= '.php';
			include($page);
		}
		else {
		echo 'Page not found. Return to
		<a href="index.php">index</a>';
		}
	}
	else {
		include('home.php');
	}

include ('head.php');
?>





<div id="container">
    <header><?php include($header); ?></header>
    
    <nav class="clearfix"><?php include ('nav.php'); ?></nav>
    <div class="clearfix">
    <div id="main" class="columns"><?php include($main); ?></div>
    
	<aside class="columns"><?php include($aside); ?></aside>
</div>

	<footer><?php include ($footer); ?></footer>
    </div> <!--! end of #container -->

	<?php include('bottom.php'); ?>


</body>
</html>
