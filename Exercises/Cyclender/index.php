<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$radius = 0;
$height = 0;
$volumn = 0;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $radius = $_POST["radius"];
  $height = $_POST["height"];
//echo $radius;
  if($radius == 0){
   $message = $message . " Radius is a required field.";
  }
  
  if($height == 0){
   $message = $message . " Height a required field.";
  }
  
  if($message == ""){
       $volumn = 3.142 * ($radius * $radius) * $height;
       
       header('Location: cylinder.php?height='. $height .'&radius='. $radius .'&volumn='. $volumn);  
  }
}
?>
<html>
  <head>
    <title>Cylinder</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <style>
      .error {
          color: red;
      }
      .required {
          color: red;
          float: left;
      }
  </style>
  <body>
    <div id="form">
        <h1>Cylinder</h1>
        <form method="post" action="index.php">
            <p class="error"><?php echo $message ?></p>
            Radius: <input type="text" name="radius" size="3"> <div class="required">* </div><br>
            Height: <input type="text" name="height" size="3"><div class="required">* </div><br>
          <button type="submit">Go</button>
        </form>
    </div>

  </body>
</html>
