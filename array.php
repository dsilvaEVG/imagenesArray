<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet href=estilo.css />
        <title>Array con imagenes</title>
    </head>
    <body>
        <table>
            <tr>
                <?php
                    $imagenes = array(
                    "flor.jpg" => "Flor",
                    "coche.jpg" => "Coche",
                    "casa.jpg" => "Casa");

                    foreach($imagenes as $ruta => $nombre){
                        echo '<td><figure><img src="img/'.$ruta.'">
                        <figcaption>'.$nombre.'</figcaption></figure></td>';
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
