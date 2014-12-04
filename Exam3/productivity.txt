<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productivity Report 1</title>
    </head>
    <body>
        <h1>Productivity Report 1</h1>
        <?php

$row = 1;
if (($handle = fopen("elves.csv", "r")) !== FALSE) {
    
    //table
    echo "<table><tbody><tr><th>Name</th><th>Department</th><th>Production</th><th>Sick days</th></tr>";
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<tr>";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "<td>". $data[$c] . "</td>";
        }
        echo "</tr>";
    }
    fclose($handle);
}
echo "</tbody></table>"
        ?>
    </body>
</html>
