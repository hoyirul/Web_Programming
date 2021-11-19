<html >
    <head>
        <title>File</title>
    </head>
    <body>
        <?php
            $myFile = "testFile.txt";
            $fh = fopen($myFile, 'r');
            //soal 9
            //$theData = fgets($fh);

            // untuk menampilkan keseluruhan text
            while(!feof($fh)){
                echo fgets($fh) . "<br/>";
            }
            fclose($fh);
        ?>
    </body>
</html>
