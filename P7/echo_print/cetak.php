<!DOCTYPE html>
<html>
    <head>
        <title>Cetak PHP</title>
    </head>
    <body>
        <?php
           $txt1 = "Praktikum PHP";
           $txt2 = "Variable, Tipe Data, String";
           echo "<h2> $txt1 </h2> ";
           echo "Materi yang dipelajari " . $txt2;
           
           print "<h2> $txt1 </h2>";
           print "Materi yang dipelajari ". $txt2;
        ?>
    </body>
</html>