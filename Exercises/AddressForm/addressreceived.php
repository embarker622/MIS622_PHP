<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 $street1 = "";
 $street2= "";
 $city="";
 $state_prov = "";
 $zip = "";
 $country = "";
 
    if(isset($_GET["street1"]))
    {
        $street1 = $_GET["street1"];
    }
    if(isset($_GET["street2"]))
    {
        $street2 = $_GET["street2"];
    }
    if(isset($_GET["city"]))
    {    
        $city = $_GET["city"];
    }
    if(isset($_GET["state_prov"]))
    {
         $state_prov = $_GET["state_prov"];
    }

    if(isset($_GET["zip"]))
    {    
        $zip  = $_GET["zip"];
    }
    if(isset($_GET["country"]))
    {
        $country = $_GET["country"];
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Address Form</title>
        <style>
            .tab{
                padding-left: 20px;
            }
        </style>
    </head>
    <body>
        <h3>Address</h3>
        <br/>
        <p>Your address is:</p>
        <div class="tab">
        <?php
            echo $street1 ."<br/>";
            echo $street2 ."<br/>"; 
            echo $city . ', ' . $state_prov . ' ' . $zip ."<br/>";
            echo $country;
        ?>
        </div>
    </body>
</html>
