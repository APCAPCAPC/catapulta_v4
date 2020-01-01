<html>
    <head>
    </head>
    <body>
    <?php
        $name = $_REQUEST["User"];
        $password = $_REQUEST["Password"];
        if ($name == "APC_phone") {
            if ($password == "1605") {
                echo "<a href='portada.html'>Ir</a>";
            } else {
                echo "mal usuario o contraseña";
            }
        } else {
            echo "Mal usuario o contraseña";
        }
    ?>
    </body>
</html>