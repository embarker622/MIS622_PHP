<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once('Library\person.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOS System</title>
    </head>
    <body>
        <?php
        $person = new HOS\Person(1);
         
        $person->setAddress1('3147 Test Street');        
        $person_address = $person -> getAddress1();
              
        $person->setEmail('e@this.com');         
        $person_email = $person->getEmail();
             
        $person->setPhone('(248) 484-5656');         
        $person_phone = $person->getPhone();
        ?>
        
        <?php 
        echo $person_address . ' <br/>';
        echo $person_email . ' <br/>';
        echo $person_phone . ' <br/>';        
        ?>
        
        <?php phpinfo(); ?>
    </body>
</html>
