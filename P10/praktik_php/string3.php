<!DOCTYPE HTML>
<html>
    <head>
        <title> String </title>
    </head>
    <body>
        <?php
            $rawString = "Welcome Birmingham Parent.
            Your replacement is a pleasure to have!";

            $malestr = str_replace("replacement", "son", $rawString);
            $femalestr = str_replace("replacement", "daughter", $rawString);

            echo "son: ". $malestr. "<br>";
            echo "Daughter: ". $femalestr. "<br>";
        ?>
    </body>
</html>

