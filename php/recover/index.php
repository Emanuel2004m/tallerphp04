<!DOCTYPE html>
<html lang="en">
<head><!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
    ?>
    <title>Creater Recover</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php';
    ?>
     <div class="container-md">
        <?php
            $saltolinea = "";
            $linea = "";
            $fichero = fopen("../datos.txt","r") or die ("Problema al abrir ficheros");
            while (!feof($fichero)) {
                $linea = fgets($fichero);
                $saltolinea = nl2br($linea);
                echo "<h4>" .$saltolinea . "</h4>";
            }
            fclose($fichero);
            echo "<h5>Fin del listado!</h5>";
        ?>
    </div>
</body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
    ?>
</html>
    <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
    ?>
    <title>Creater Recover</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php';
    ?>
    <div class="conteiner-md">
            
    </div>
</body>
    <?php
        require_once dirname(__FILE__).'/php/config/header.php';
    ?>
</html>