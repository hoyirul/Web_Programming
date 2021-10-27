<!DOCTYPE html>
<html>
    <head>
    <title>Perulangan FOREACH</title>
    </head>
    <body>
        <?php
            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $value) {
                echo "$value <br>";
            }
        ?>
    </body>
</html>
