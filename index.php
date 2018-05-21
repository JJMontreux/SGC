<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">

        <title>DAW - Tarea de la unidad 6</title>
        <meta name="description" content="DAW - Tarea de la unidad 6">
        <meta name="author" content="S.Giorgetta">

    </head>

    <body>

        <?php
        /**
         * Documento principal de página web que interactúa con la clase Operable
         * Categoría: Main page
         *
         * @package     DAW06
         * @author      S. Giorgetta <S.Giorgetta@ejemplo.com>
         * @version     v.1.0 (21/05/2018)
         * @copyright   https://creativecommons.org/licenses/by-nc-nd/3.0/ CC BY-NC-ND
         */
        include './clase.php';
		
		// MODIFICACIÓN EN index.php PARA PROBAR GIT

        /**
         * Función que obtiene el valor de la propiedad palabra del objeto de la clase Operable creado
         *
         * @param object $nombreObjetoOperable Objeto de la clase Operable
         * @var string $infoCompleta Almacena una cadena con todas las propiedades del objeto de la clase Operable 
         * 
         * @return string
         */
        function mostrarPropiedades($nombreObjetoOperable) {
            $infoCompleta = "<strong>Constante INFO:</strong> " . Operable::INFO . "<br />"
                    . "<strong>Var. pública Autor:</strong> " . $nombreObjetoOperable->autor . "<br />"
                    . "<strong>Palabra:</strong> " . $nombreObjetoOperable->getPalabra() . "<br />"
                    . "<strong>Número:</strong> " . $nombreObjetoOperable->getNumero() . "<br />"
                    . "<strong>1er nº comparación:</strong> " . $nombreObjetoOperable->getNumX() . "<br />"
                    . "<strong>2do nº comparación:</strong> " . $nombreObjetoOperable->getNumY() . "<br />"
                    . "<strong>1er término ecuación:</strong> " . $nombreObjetoOperable->getNumA() . "<br />"
                    . "<strong>2do término ecuación:</strong> " . $nombreObjetoOperable->getNumB() . "<br />"
                    . "<strong>Año:</strong> " . $nombreObjetoOperable->getAno() . "<br />";

            return $infoCompleta;
        }
        ?>

        <?php
        // Crear el objeto de la clase Operable
        $operable0001 = new Operable("S.Giorgetta", "solos", 7, 12, 66, 24, 8, 2020);
        echo "<br />";

        // Mostrar información completa del objeto Operable creado ($operable0001)
        echo "<h2>Objeto de la clase Operable creado con los siguientes atributos:</h2>";
        echo "<strong>Nombre</strong>: " . "\$operable0001<br />";
        echo mostrarPropiedades($operable0001);
        echo "<br />";


        // Operaciones sobre el objeto '$operable0001' de la clase Operable
        echo "<h2>Operaciones sobre el objeto '\$operable0001' de la clase Operable</h2>";

        // VERIFICAR PALÍNDROMO
        echo "<h3>Comprobar palíndromo sobre la propiedad 'palabra'</h3>";
        echo "¿Es la palabra '" . $operable0001->getPalabra() . "' un palíndromo?<br />";
        echo $operable0001->verificarPalindromo();

        // VERIFICAR PRIMO
        echo "<h3>Comprobar primo sobre la propiedad 'numero'</h3>";
        echo "¿Es primo el número '" . $operable0001->getNumero() . "'?<br />";
        echo $operable0001->verificarPrimo();

        // OBTENER NÚMERO MAYOR ENTRE LOS DOS ESTABLECIDOS
        echo "<h3>Obtener el número más alto entre '1er nº comparación' y '2do nº comparación'</h3>";
        echo "¿Cuál es el número más alto entre '" . $operable0001->getNumX() . "' y '" . $operable0001->getNumY() . "'?<br />";
        echo $operable0001->identificarMayor();

        // RESOLVER ECUACIÓN DE TIPO ax+b=0
        echo "<h3>Resolver ecuación de tipo ax+b=0 donde a = '1er término ecuación' y b = '2do término ecuación'</h3>";
        echo "¿Cuál es el valor de x si " . $operable0001->getNumA() . "x + " . $operable0001->getNumB() . " = 0?<br />";
        echo $operable0001->resolverEcuacion();

        // VERIFICAR AÑO BISIESTO
        echo "<h3>Comprobar año bisiesto sobre la propiedad 'ano'</h3>";
        echo "¿Es bisiesto el año '" . $operable0001->getAno() . "'?<br />";
        echo $operable0001->verificarBisiesto();
        ?>

    </body>
</html>