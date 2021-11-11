<!DOCTYPE HTML>
<html>
    <head>
        <title> Menggurutkan Element Array </title>
    </head>
    <body>
        <h2> Sorting Array </h2>
        <?php
            // Sebelum dimodifikasi
            $age = array (
                            "Joe" => "29",
                            "Elsa" => "27",
                            "Kevin" => "32",
                            "Nick" => "24",
                            "Olaf" => "9",
                            "Ana" => "17"
                         );
            asort($age);

            foreach($age as $name => $value){
                echo "name = " . $name . ", age = " . $value . "<br>";
            }
            // Modifikasi rsort
            echo "<h4>Menggunakan rsort</h4>";
            $age = array (
                            "Joe" => "29",
                            "Elsa" => "27",
                            "Kevin" => "32",
                            "Nick" => "24",
                            "Olaf" => "9",
                            "Ana" => "17",
                        );

            rsort($age);

            foreach ($age as $name => $value) {
                echo "name = ".$name.", age = ".$value."<br>";
            }

            // Modifikasi ksort
            echo "<h4>Menggunakan ksort</h4>";
            $age = array (
                            "Joe" => "29",
                            "Elsa" => "27",
                            "Kevin" => "32",
                            "Nick" => "24",
                            "Olaf" => "9",
                            "Ana" => "17",
                        );

            ksort($age);

            foreach ($age as $name => $value) {
                echo "name = ".$name.", age = ".$value."<br>";
            }

            // Modifikasi arsort
            echo "<h4>Menggunakan arsort</h4>";
            $age = array (
                            "Joe" => "29",
                            "Elsa" => "27",
                            "Kevin" => "32",
                            "Nick" => "24",
                            "Olaf" => "9",
                            "Ana" => "17",
                        );

            arsort($age);

            foreach ($age as $name => $value) {
                echo "name = ".$name.", age = ".$value."<br>";
            }

            // Modifikasi krsort
            echo "<h4>Menggunakan krsort</h4>";
            $age = array (
                            "Joe" => "29",
                            "Elsa" => "27",
                            "Kevin" => "32",
                            "Nick" => "24",
                            "Olaf" => "9",
                            "Ana" => "17",
                        );

            krsort($age);

            foreach ($age as $name => $value) {
                echo "name = ".$name.", age = ".$value."<br>";
            }
        ?>
    </body>
</html>
           