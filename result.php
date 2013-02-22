<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$result = 100 * $num1 / $num2;


?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Plasmid Consentration Result</title>
<style>
.akio{padding: 20px; text-align:center; margin: 100px auto 50px auto;background:#CCC; border 1px solid #666; -moz-border-radius: 20px;}

</style>
</head>

<body>


<div class="akio">

Plasmid mg/L = 100<em>&mu;L</em>  <strong>x</strong> <?php echo $num1; ?><em>&mu;g/&mu;L</em> Minirep Concentration <strong>/</strong> <?php echo $num1 ?><em>mL</em> cultured pellet
</div>

<div class="akio">
Plasmid Consentration = <?php echo $result; ?>

</div>
<a href="/techcenter/math/converter.php" >Back to Plasmid Concentration</a>





</body>

</html>
