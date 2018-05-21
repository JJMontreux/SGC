<?php

/**
 * Documento con la definición de la clase <b>Operable</b> y sus derivados
 * Categoría: Clases
 *
 * @package     DAW06
 * @author      S. Giorgetta <S.Giorgetta@ejemplo.com>
 * @version     v.1.0 (21/05/2018)
 * @license   https://creativecommons.org/licenses/by-nc-nd/3.0/ CC BY-NC-ND
 */

 // MODIFICACIÓN EN clase.php PARA PROBAR GIT SUBIENDO V. 1.0.1
 
/**
 * Clase Operable
 *
 * Crea objetos de la clase Operable y permite realizar operaciones básicas
 *
 * @var string $autor Almacena una cadena con el autor que queramos asignarle al objeto de la clase Operable
 * @var string $palabra Almacena la cadena a evaluar como palíndromo
 * @var int $numero Almacena el número a evaluar como primo
 * @var int $numX Almacena un número a comparar con numY para saber cuál es mayor
 * @var int $numY Almacena un número a comparar con numX para saber cuál es mayor
 * @var double $numA Almacena el primer término de la ecuación de 1er grado a evaluar
 * @var double $numB Almacena el segundo término de la ecuación de 1er grado a evaluar
 * @var int $ano Almacena el año a evaluar como bisiesto
 */
class Operable {

    // PROPIEDADES
    /**
     * Almacena una cadena con la razón de la existencia del script
     * @constant INFO
     */
    const INFO = 'DAW - Tarea de la unidad 6';

    /**
     * Almacena una cadena con el autor que queramos asignarle al objeto de la clase Operable
     * @var string $autor
     */
    public $autor;

    /**
     * Almacena la cadena a evaluar como palíndromo
     * @var string $palabra
     */
    private $palabra;

    /**
     * Almacena el número a evaluar como primo
     * @var int $numero
     */
    private $numero;

    /**
     * Almacena un número a comparar con numY para saber cuál es mayor
     * @var int $numX
     */
    private $numX;

    /**
     * Almacena un número a comparar con numX para saber cuál es mayor
     * @var int $numY
     */
    private $numY;

    /**
     * Almacena el primer término de la ecuación de 1er grado a evaluar
     * @var double $numA
     */
    private $numA;

    /**
     * Almacena el segundo término de la ecuación de 1er grado a evaluar
     * @var double $numB
     */
    private $numB;

    /**
     * Almacena el año a evaluar como bisiesto
     * @var int $ano
     */
    private $ano;

    // MÉTODOS
    // CONSTRUCTOR
    /**
     * Método constructor con parámetros
     *
     * @param string $autor Asigna un autor al objeto de la clase Operable
     * @param string $palabra Asigna una cadena para su posterior evaluación como palíndromo
     * @param int	$numero Asigna un número entero para su posterior evaluación como primo
     * @param int	$numX Asigna un número a comparar con numY para saber cuál es mayor
     * @param int	$numY Asigna un número a comparar con numX para saber cuál es mayor
     * @param double	$numA Asigna el primer término de la ecuación de 1er grado a evaluar
     * @param double	$numB Asigna el segundo término de la ecuación de 1er grado a evaluar
     * @param int	$ano Asigna el año a evaluar como bisiesto
     * 
     * @access public
     */
    public function __construct($autor, $palabra, $numero, $numX, $numY, $numA, $numB, $ano) {
        $this->autor = $autor;
        $this->palabra = $palabra;
        $this->numero = $numero;
        $this->numX = $numX;
        $this->numY = $numY;
        $this->numA = $numA;
        $this->numB = $numB;
        $this->ano = $ano;
    }

    // SETTERS
    /**
     * Función que establece el autor del objeto de la clase Operable
     *
     * @param string $autor Asigna un autor al objeto de la clase Operable creado
     * 
     * @access public
     */
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    /**
     * Función que establece una cadena para su posterior evaluación como palíndromo
     *
     * @param string $palabra
     * 
     * @access public
     */
    public function setPalabra($palabra) {
        $this->palabra = $palabra;
    }

    /**
     * Función que establece un número entero para su posterior evaluación como primo
     *
     * @param int $numero
     * 
     * @access public
     */
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    /**
     * Función que establece un número a comparar con numY para saber cuál es mayor
     *
     * @param int $numX
     * 
     * @access public
     */
    public function setNumX($numX) {
        $this->numX = $numX;
    }

    /**
     * Función que establece un número a comparar con numX para saber cuál es mayor
     *
     * @param int $numY
     * 
     * @access public
     */
    public function setNumY($numY) {
        $this->numY = $numY;
    }

    /**
     * Función que establece el primer término de la ecuación de 1er grado a evaluar
     *
     * @param double $numA
     * 
     * @access public
     */
    public function setNumA($numA) {
        $this->numA = $numA;
    }

    /**
     * Función que establece el segundo término de la ecuación de 1er grado a evaluar
     *
     * @param double $numB
     * 
     * @access public
     */
    public function setNumB($numB) {
        $this->numB = $numB;
    }

    /**
     * Función que establece el año a evaluar como bisiesto
     *
     * @param int $ano
     * 
     * @access public
     */
    public function setAno($ano) {
        $this->ano = $ano;
    }

    // GETTERS
    /**
     * Función que obtiene el valor de la propiedad autor del objeto de la clase Operable creado
     * 
     * @access public
     * @return string
     */
    public function getAutor() {
        return $this->autor;
    }

    /**
     * Función que obtiene el valor de la propiedad palabra del objeto de la clase Operable creado
     * 
     * @access public
     * @return string
     */
    public function getPalabra() {
        return $this->palabra;
    }

    /**
     * Función que obtiene el valor de la propiedad numero del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Función que obtiene el valor de la propiedad numX del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getNumX() {
        return $this->numX;
    }

    /**
     * Función que obtiene el valor de la propiedad numY del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getNumY() {
        return $this->numY;
    }

    /**
     * Función que obtiene el valor de la propiedad numA del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getNumA() {
        return $this->numA;
    }

    /**
     * Función que obtiene el valor de la propiedad numB del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getNumB() {
        return $this->numB;
    }

    /**
     * Función que obtiene el valor de la propiedad ano del objeto de la clase Operable creado
     * 
     * @access public
     * @return int
     */
    public function getAno() {
        return $this->ano;
    }

    // MÉTODOS ADICIONALES (OPERACIONES)
    /**
     * Función que comprueba si una cadena es un palíndromo
     *
     * Devuelve 'true' en caso afirmativo y 'false' en caso negativo
     * 
     * @var string $palabraInvertida Almacena, invertida, la cadena guardada en la propiedad palabra del objeto de la clase Operable creado
     * @var bool $esPalindromo Identifica como verdadera o falsa la condición de palíndromo de la cadena evaluada
     * @var bool $esPalindromoBoolLiteral Convierte a booleano literal el booleano numeral $esPalindromo
     * 
     * @access public
     * @return bool
     */
    public function verificarPalindromo() {
        $palabraInvertida = strrev($this->palabra);
        $esPalindromo = FALSE;

        if ($palabraInvertida == $this->palabra) {
            $esPalindromo = TRUE;
        } else {
            $esPalindromo = FALSE;
        }

        $esPalindromoBoolLiteral = ($esPalindromo) ? 'true' : 'false';
        return $esPalindromoBoolLiteral;
    }

    /**
     * Función que comprueba si un número es primo
     *
     * Devuelve 'true' en caso afirmativo y 'false' en caso negativo
     * 
     * @var bool $esPrimo Identifica como verdadera o falsa la condición de primo del número evaluado
     * @var bool $esPrimoBoolLiteral Convierte a booleano literal el booleano numeral $esPrimo
     * 
     * @access public
     * @return bool
     */
    public function verificarPrimo() {
        $esPrimo = TRUE;

        if ($this->numero > 0 && $this->numero != 1) {
            for ($i = 2; $i < $this->numero; $i++) {
                if ($this->numero % $i == 0) {
                    $esPrimo = FALSE;
                }
            }
        }

        $esPrimoBoolLiteral = ($esPrimo) ? 'true' : 'false';
        return $esPrimoBoolLiteral;
    }

    /**
     * Función que comprueba y devuelve el mayor de dos números evaluados 
     *
     * @var int $numMayor Almacena el número más alto resultado de la comparación
     * 
     * @access public
     * @return int
     */
    public function identificarMayor() {
        $numMayor = 0;

        if ($this->numX > $this->numY) {
            $numMayor = $this->numX;
        } else {
            $numMayor = $this->numY;
        }

        return $numMayor;
    }

    /**
     * Función que resuelve una ecuación de primer grado de tipo ax+b=0
     * 
     * @var string $resultado Almacena el resultado de la ecuación
     * 
     * @access public
     * @return string
     */
    public function resolverEcuacion() {
        $resultado = "";

        if ($this->numA != 0) {
            $resultado = "x = " . -$this->numB / $this->numA;
        } else {
            $resultado = "x es igual a infinito.";
        }

        return $resultado;
    }

    /**
     * Función que evalúa si un año es bisiesto
     *
     * Devuelve 'true' en caso afirmativo y 'false' en caso negativo 
     *
     * @var bool $esBisiesto Identifica como verdadera o falsa la condición de bisiesto del año evaluado
     * @var bool $esBisiestoBoolLiteral Convierte a booleano literal el booleano numeral $esBisiesto
     * 
     * @access public
     * @return string
     */
    public function verificarBisiesto() {
        $esBisiesto = FALSE;

        if (($this->ano % 4 == 0) && (($this->ano % 100 != 0) || ($this->ano % 400 == 0))) {
            $esBisiesto = TRUE;
        } else {
            $esBisiesto = FALSE;
        }

        $esBisiestoBoolLiteral = ($esBisiesto) ? 'true' : 'false';
        return $esBisiestoBoolLiteral;
    }

}

?>