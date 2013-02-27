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





<div id="taco">
    <header><?php include($header); ?></header>
    <nav class=""><?php include ('nav.php'); ?></nav>
    
    <div class="content">
        <div class="main"><?php include($main); ?></div>
    	<aside><?php include($aside); ?></aside>
    </div>
    
	<footer><?php include ($footer); ?></footer>
    
</div> <!--! end taco -->

<?php include('bottom.php'); ?>

</body>
</html>
