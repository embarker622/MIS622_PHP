<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOS System</title>
    </head>
    <body>
        <?php
        $person = new HOS.Person(1);
        
        $person->setAddress1('3147 Test Street');
        
        $person_address = $person -> getAddress1();
        ?>
        
        <?php 
        echo $person_address;
        ?>
    </body>
</html>
