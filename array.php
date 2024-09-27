<!-- David Silva Vega -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet href=estilo.css />
        <title>Array con imagenes</title>
    </head>
    <body>
        <!-- Metemos el array en una tabla, con una sola fila (tr) -->
        <table> 
            <tr>
                <?php
                    $imagenes = array(
                    "flor.jpg" => "Flor",
                    "coche.jpg" => "Coche",
                    "casa.jpg" => "Casa");
                    // El índice será el nombre del archivo, el valor será el nombre de la imagen

                    // Vamos a pasar con el foreach el listado de elementos de la array asociativa
                    /* Cada elemento estará en un <td>  y tendrá un <figure> con una imagen enlazada 
                    por la ruta y un <figcaption> con su nombre descriptivo */
                    /*Al índice le pondremos de nommbre $ruta y a la descripción le pondremos $nombre*/
                    foreach($imagenes as $ruta => $nombre){
                        echo    
                            '<td> 
                                <figure>
                                    <img src="img/'.$ruta.'">
                                    <figcaption>'.$nombre.'</figcaption>
                                </figure>
                            </td>';
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
