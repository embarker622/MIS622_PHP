<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$radius = $_GET["radius"];
$height = $_GET["height"];
$volumn = $_GET["volumn"];
?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cylinder</title>
    <style>
      .error {
        font-weight: bold;
        color: red;
      }
    </style>
  </head>
  <body>
    <div id="answer">
        <h1>Cylinder</h1>
        <p>
            <?php
              print "A cylinder with a radius of " . $radius ." and a height of ". $height ." has a volume of ". $volumn .".";
              ?>
        </p>
    </div>
      </body>
</html>
