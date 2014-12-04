<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productivity Report 2</title>
    </head>
    <body>
        <h1>Productivity Report 2</h1>
        <?php
        $workers = 0;
        $sumProduction = 0;
        $sumSickDays = 0;

        if (($handle = fopen("elves.csv", "r")) !== FALSE) {

            //table
            echo "<table><tbody><tr><th>Name</th><th>Department</th><th>Production</th><th>Sick days</th></tr>";
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);

                echo "<tr>";
                $workers++;
                $sumProduction += $data[2]; 
                $sumSickDays += $data[3];
                
                for ($c = 0; $c < $num; $c++) {

                    echo "<td>" . $data[$c] . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
            fclose($handle);
            echo "<p>Number of elves: " . $workers . "</p>";
            echo "<p>Total production: " . $sumProduction . "</p>";
            echo "<p>Average production: " . number_format($sumProduction / $workers, 1) . "</p>";
            echo "<p>Total sick days: " . $sumSickDays . "</p>";
            echo "<p>Average sick days: " . number_format($sumSickDays / $workers , 1) . "</p>";
        }
        ?>
    </body>
</html>
