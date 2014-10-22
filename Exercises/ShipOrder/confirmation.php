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
 $fname = "";
 $lname = "";
 $cutter = "";
 $chassemaree="";
 $corvette = "";
 $carrack = "";
 $sumCutter = 0;
 $sumChassemaree = 0;
 $sumCarrack = 0;
 $sumCorvette = 0;
 $shipping = 0;
 
    $shipping = $_GET["shipping"];
    
    $corvette = $_GET["corvette"];
    $carrack =  $_GET["carrack"];
    $cutter =  $_GET["cutter"];
    $chassemaree =  $_GET["chassemaree"];
    
    $sumCarrack = $carrack * 29.95;
    $sumChassemaree = $chassemaree * 32.95;
    $sumCorvette = $corvette * 34.95;
    $sumCutter = $cutter * 26.95;
    
    $grandTotal = $sumCarrack + $sumChassemaree + $sumCorvette + $sumCutter;
 
   if(isset($_GET["fname"])){
        $fname = $_GET["fname"];
    }
    
    if(isset($_GET["lname"])){
        $lname = $_GET["lname"];
    }
    
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
        <title>Order Confirmation</title>
        <style>
            .address {
                padding-left: 10px;
            }
           table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h3>Order Confirmation</h3>
        
        <p>Ship To:</p>
        <div class="address">
                <?php
            echo $fname .' '. $lname."<br/>";
            echo $street1 ."<br/>";
            echo $street2 ."<br/>"; 
            echo $city . ', ' . $state_prov . ' ' . $zip ."<br/>";
            echo $country;
        ?>
        </div>
        <p>Order Summary</p>
        <table>
            <tr><td>Product</td>
                <td>Number Ordered</td>
                <td>Unit Price</td>
                <td>Total Price</td>
            </tr>
            <tr>
                <td>Carrack</td>
                <td><?php echo $carrack?></td>
                <td>29.95</td>
                <td><?php echo $sumCarrack?></td>
            </tr>
            <tr>
                <td>Chasse-maree</td>
                <td><?php echo $chassemaree?></td>
                <td>32.95</td>
                <td><?php echo $sumChassemaree?></td>
            </tr>
            <tr>
                <td>Corvette</td>
                <td><?php echo $corvette?></td>
                <td>34.95</td>
                <td><?php echo $sumCorvette?></td>
            </tr>
            <tr>
                <td>Cutter</td>
                <td><?php echo $cutter ?></td>
                <td>26.95</td>
                <td><?php echo $sumCutter ?></td>
            </tr>   
            <tr>
                <td colspan="3">Shipping</td>
                <td><?php echo $shipping ?> </td>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td><?php echo $grandTotal ?> </td>
            </tr>
        </table>
          
    </body>
</html>
