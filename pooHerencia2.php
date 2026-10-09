<?php

class A {
    public static function miFuncion() {
        // Muestra el nombre de la clase
        echo "Clase ejecutada: " . __CLASS__ . "\n";
    }

    public static function otraFuncionConStatic() {
        // Late Static Binding: evalúa la llamada según la clase invocada (B)
        static::miFuncion();
    }

    public static function otraFuncionConSelf() {
        // Enlace estático estricto: evalúa la llamada siempre en la clase actual (A)
        self::miFuncion();
    }
}

class B extends A {
    public static function miFuncion() {
        echo "Clase ejecutada: " . __CLASS__ . "\n";
    }
}

// --- PRUEBA Y RESULTADOS ---

echo "--- 1. Llamada con static:: ---\n";
B::otraFuncionConStatic(); 
// Resultado: "Clase ejecutada: B"
// Explicación: 'static::' detecta que fue llamado desde la clase B e invoca B::miFuncion().

echo "\n--- 2. Llamada con self:: ---\n";
B::otraFuncionConSelf();   
// Resultado: "Clase ejecutada: A"
// Explicación: 'self::' está definido dentro de la clase A, por lo que invoca A::miFuncion().

?>