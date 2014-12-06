<!DOCTYPE html>
<?php
$reportDefinition = "all data.";
$report = "all";

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
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cars</title>
        <style>
            body {
                font-family: sans-serif;
            }
            th {
                padding: 10px;
            }
            td {
                border: 1px solid #BBB;
                padding: 5px;
                vertical-align: top;
            }
            .align-center, th {
                text-align: center;
            }
            .align-left {
                text-align: left;
            }
            .align-right {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h1>Cars</h1>
        <p>Showing <?php echo $reportDefinition ?></p>
        <p>Available reports:</p>
        <ul>
            <li>
                <a href="index.php?report=all">All car data</a>
            </li>
            <li>
                <a href="index.php?report=himpg">Top three cars ranked by miles per gallon</a>
            </li>
            <li>
                <a href="index.php?report=hihp">Top three cars ranked by horse power</a>
            </li>
        </ul>
    </p>
    <table>
        <tr>
            <th>Model</th>
            <th>MPG</th>
            <th>Cylinders</th>
            <th>Engine<br>displacement</th>
            <th>Horse power</th>
        </tr>
        <?php
        $cars = array();
        $rowCnt = 1;
        $returnCnt = 1000;
        $row = 1;
        
        if (($handle = fopen("cars.csv", "r")) !== FALSE) {

            //sort based on link selected
            if (isset($_GET["report"])) {
                $report = $_GET["report"];
            }

            //data
            while ($car = fgetcsv($handle, 1000, ",")) {
                if ($rowCnt > 1) {
                    $cars[] = $car;
                }
                $rowCnt++;
            }


            switch ($report) {
                case "himpg":
                    $reportDefinition = " top three cars ranked by miles per gallon.";
                    array_sort_by_field($cars, 1, "DESC");
                    $returnCnt = 3;
                    break;
                case "hihp":
                    $reportDefinition = "  top three cars ranked by horse power.";
                    array_sort_by_field($cars, 4, "DESC");
                    $returnCnt = 3;
                    break;
                default:
                    $reportDefinition = " all data.";
                    array_sort_by_field($cars);
            }


            foreach ($cars as &$data) {


                if ($returnCnt >= $row) {
                    $num = count($data);
                    echo "<tr>";

                    for ($c = 0; $c < $num; $c++) {
                        if ($c == 0) {
                            echo "<td  class='align-left'>" . $data[$c] . "</td>";
                        } else {
                            echo "<td class='align-right'>" . $data[$c] . "</td>";
                        }
                    }
                    echo "</tr>";
                }

                $row++;
            }
        }
        fclose($handle);

        echo "</tbody></table>"
        ?>


    </table>
</body>
</html>