<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ship Order</title>
        <style>
            .header {text-align: left;
                    padding-left: -20px !important;}
            .item {text-align: left;
                padding-left: 20px
            }
            .money{
                width: 50px;
            }
        </style>
    </head>
    <body>
  
        
        <form name="form1" mentod="post" action="confirmation.php">
            <table>
                <tr colspan="2" class="header">
                    <th >Name:</th>
                </tr>
                <tr >
                    <th>First Name:</th>
                    <td><input type="text" name="fname" />
                </tr>
                          <tr>
                    <th>Last Name:</th>
                    <td><input type="text" name="lname" />
                </tr>
                <tr colspan="2" class="header">
                    <th>Address:</th>
                </tr>                
                <tr>
                    <th>Street line 1:</th>
                    <td><input type="text" name="street1" />
                </tr>
                <tr>
                    <th>Street line 2:</th>
                    <td><input type="text" name="street2" />
                </tr>
                <tr>
                    <th>City:</th>
                    <td><input type="text" name="city" />
                </tr>
                <tr>
                    <th>State/ Province:</th>
                    <td><input type="text" name="state_prov" />
                </tr>
                <tr>
                    <th>Zip/Postal Code:</th>
                    <td><input type="text" name="zip" />
                </tr>
                <tr>
                    <th>Country:</th>
                    <td><input type="text" name="country" />
                </tr>
                <tr colspan="2" class="header">
                    <th>Products:</th>
                </tr>
                <tr>
                    <th>carrack:</th>
                    <td><input type="text" name="carrack" class="money"/> ($29.95 each)
                </tr>
                
                <tr>
                    <th>chasse-maree:</th>
                    <td><input type="text" name="chassemaree" class="money"/> ($32.95 each)
                </tr>
                
                 <tr>
                    <th>corvette:</th>
                    <td><input type="text" name="corvette" class="money"/> ($34.95 each)
                </tr>
                
                <tr>
                    <th>cutter:</th>
                    <td><input type="text" name="cutter" class="money"/> ($26.95 each)
                </tr>
                <tr colspan="2" class="header">
                    <th>Shipping Method</th>
                </tr>
                <tr colspan="2">
                     <td><input type="radio" name="shipping" value="5"/>Standard ($5)</td>
                </tr>
                <tr colspan="2">
                     <td><input type="radio" name="shipping" value="10"/>Overnight ($10)</td>
                </tr>  
                <tr colspan="2">
                    <td><input type="submit" value="Order"/>
                </tr>                 
            </table>
        </form>
    </body>
</html>
