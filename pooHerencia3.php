<?php

// Definición de la clase Coche como 'final' para evitar herencia
final class Coche {
    public function getColor() {
        echo "Rojo";
    }
}

// Intentar heredar de una clase 'final' provocará un Error Fatal:
// Class CocheDeLujo cannot extend final class Coche:
class CocheDeLujo extends Coche {
    // Error Fatal: Clase no heredada.
}

// Ejemplo de uso:
$miCoche = new Coche();
$miCoche->getColor();

?>