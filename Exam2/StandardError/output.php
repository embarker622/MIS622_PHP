<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$sd = $_GET["sd"];
$n = $_GET["n"];
$sd_m = $sd / sqrt($n);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Standard error of the mean</h1>
        <p>Sample standard deviation: <?php echo $sd ?></p>
        <p>Sample size: <?php echo $n ?></p>
        <p>Standard error of the mean: <?php echo $sd_m ?></p>
    </body>
</html>
