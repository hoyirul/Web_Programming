<html>
    <head>
        <title> GetForm </title>
    </head>
    <body>
         <?php
            if(isset($_GET["username"]) AND isset($_GET["email"]) ){
                echo "Welcome ".$_GET["username"]."!!<br/>";
                echo "Your email address is ".$_GET["email"];
            }else{
                echo "Anda harus mengakses halaman ini dari form_1.html";
            }
            ?>
    </body>
</html>