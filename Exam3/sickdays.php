<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productivity Report 3</title>
    </head>
    <body>
        <h1>Productivity Report 3</h1>
        <p>Candidates for execution have their names in <b>bold</b>.</p>
        <?php
        $workers = 0;
        $sumProduction = 0;
        $sumSickDays = 0;
        $sumExecution = 0;
 

        if (($handle = fopen("elves.csv", "r")) !== FALSE) {
            //read into array
                //for the life of me i cannot get this to work. grrrr!
            //table
            echo "<table><tbody><tr><th>Name</th><th>Department</th><th>Production</th><th>Sick days</th></tr>";
            while (($data = fgetcsv($handle, 1000, ",") ) !== FALSE) {

                $num = count($data);

                echo "<tr>";
                $workers++;
                $sumProduction += $data[2];
                $sumSickDays += $data[3];

                for ($c = 0; $c < $num; $c++) {
                    if ($c == 0) {
                        if ($data[3] * 25 > $data[2]) {
                            $sumExecution++;
                            echo "<td><b>" . $data[0] . "</b></td>";
                        } else {
                            echo "<td>" . $data[0] . "</td>";
                        }
                    } else {
                        echo "<td>" . $data[$c] . "</td>";
                    }
                }
            }
            echo "</tr>";
        }
        echo "</tbody></table>";

        //sort data
        fclose($handle);
        echo "<p>Number of execution candidates: " . $sumExecution . "</p>";
        ?>
    </body>
</html>
<?php

/**
 * Sort a multi demensional array on a column.
 * Adapted from code by Jeroen Fiege, 
 * on http://shiflett.org/blog/2011/jun/sorting-multi-dimensional-arrays-in-php
 *
 * @param array $array array with hash array
 * @param mixed $field key that you want to sort on
 * @param enum $order ASC or DESC
 */
function array_sort_by_field(&$array, $field = 0, $order = "ASC") {
    $oper = ($order == "ASC") ? ">" : "<";
    if (!is_array($array)) {
        return;
    }
    usort($array, create_function('$a,$b', "return (\$a['$field'] $oper \$b['$field']);"));
    reset($array);
}
?>