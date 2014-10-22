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
            th {text-align: left;}
        </style>
    </head>
    <body>
        <h3>Address</h3>
        <form name="form1" mentod="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <th>Street line 1:</th>
                    <td><input type="text" name="street1" value="<?php echo $street1 ?>"/>
                </tr>
                <tr>
                    <th>Street line 2:</th>
                    <td><input type="text" name="street2" value="<?php echo $street2 ?>"/>
                </tr>
                <tr>
                    <th>City:</th>
                    <td><input type="text" name="city" value="<?php echo $city ?>"/>
                </tr>
                <tr>
                    <th>State/ Province:</th>
                    <td><input type="text" name="state_prov" value="<?php echo $state_prov ?>"/>
                </tr>
                <tr>
                    <th>Zip/Postal Code:</th>
                    <td><input type="text" name="zip" value="<?php echo $zip ?>"/>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td><input type="text" name="country" value="<?php echo $country ?>"/>
                </tr>
                <tr colspan="2">
                    <td><input type="submit" value="Send"/>
                </tr>                
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
