<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Faux Exam 3</title>
    </head>
    <body>
        <?php
        $fileExists = file_exists("resignation.txt");
        echo $fileExists;
        //read the entire string
        if ($fileExists) {
            $myfile = fopen('resignation.txt', 'r') or die("Unable to open file!");

            $contents = fread($myfile, filesize('resignation.txt'));

            //echo "<pre>" . $contents . "</pre>";

            $old = array("Your", "your", "You", "you", "Are", "are", "Over", "over");
            $new = array("Thine", "thine", "Thou", "thou", "Art", "art", "O'er", "o'er");

            $myfile1 = str_replace($old, $new, $contents);


            echo "<pre>" . $myfile1 . "</pre>";
        }
        ?>
    </body>
</html>
