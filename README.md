# Prácticas de Programación Orientada a Objetos en PHP

## Descripción

Este proyecto consiste en una serie de ejercicios prácticos desarrollados en **PHP**, enfocados en el aprendizaje de los conceptos fundamentales de la Programación Orientada a Objetos (POO).

Durante estas prácticas se trabajan temas como la herencia, el encapsulamiento, el uso de modificadores de acceso, el *Late Static Binding*, las clases finales, los cálculos geométricos y la creación de jerarquías de clases para representar personas, estudiantes y docentes.

## Tecnologías utilizadas

* **PHP 8.x** - Lenguaje principal para desarrollar los ejercicios y aplicar los conceptos de POO.
* **HTML5** - Estructura básica para mostrar los resultados en el navegador.
* **WAMP / XAMPP** - Entornos de desarrollo local.

---

## Estructura del proyecto

```text
TallerPOO_PHP/
│
├── Problema1_Coche.php
├── Problema2_LateStaticBinding.php
├── Problema3_ClaseFinal.php
├── Problema4_Circulo.php
│
└── Problema5_Jerarquia/
    ├── Persona.php
    ├── Estudiante.php
    └── Docente.php
```

### Archivos principales

**Problema1_Coche.php**

Demuestra la herencia básica mediante las clases `Coche` y `CocheDeLujo`. Se trabaja la reutilización de atributos y métodos, además de la incorporación de características adicionales a una clase derivada.

**Problema2_LateStaticBinding.php**

Explica la diferencia entre `self::` y `static::` en PHP, mostrando cómo se resuelven las llamadas a métodos estáticos cuando existe herencia entre clases.

**Problema3_ClaseFinal.php**

Presenta el uso de la palabra clave `final` para impedir que una clase pueda ser heredada por otras clases.

**Problema4_Circulo.php**

Contiene la clase `Circulo`, utilizada para calcular el área y el perímetro a partir del radio.

**Carpeta Problema5_Jerarquia/**

Contiene las clases `Persona`, `Estudiante` y `Docente`, organizadas mediante una relación de herencia.

<img width="297" height="192" alt="image" src="https://github.com/user-attachments/assets/c2753abb-4dbf-4c84-adbf-8a79b82d18a1" />

---

## Contenido de los ejercicios

### Problema #1: Herencia básica y encapsulamiento

Se implementa una clase padre llamada `Coche` y una clase hija llamada `CocheDeLujo`.

La clase derivada hereda las características de la clase principal y agrega atributos propios, como `extras`. También se utilizan métodos *getters* y *setters* para acceder y modificar determinados atributos.

Este ejercicio permite comprender cómo la herencia facilita la reutilización del código.

<img width="1211" height="852" alt="image" src="https://github.com/user-attachments/assets/623dd8d1-9059-42c1-9918-ff6bbf98c997" />


### Problema #2: Late Static Binding (`static::` vs `self::`)

Se analiza la diferencia entre dos formas de acceder a métodos estáticos en PHP:

* `self::` hace referencia a la clase en la que se encuentra definido el método.
* `static::` utiliza el mecanismo de *Late Static Binding*, que permite resolver la referencia según la clase que inició la llamada en tiempo de ejecución.

Ejemplo:

```php
static::miFuncion();
self::miFuncion();
```

Este mecanismo permite comprender mejor el comportamiento de los métodos estáticos cuando se trabaja con herencia.

<img width="1192" height="865" alt="image" src="https://github.com/user-attachments/assets/8fe5c3a3-8618-4c38-a0b7-a03b24916d65" />


### Problema #3: Uso de la palabra clave `final`

Se utiliza el modificador `final` para evitar que una clase pueda ser heredada.

Ejemplo:

```php
final class Coche {
    // Esta clase no puede ser heredada.
}
```

Si se intenta crear una clase que herede de una clase declarada como `final`, PHP genera un error.

<img width="763" height="485" alt="image" src="https://github.com/user-attachments/assets/a01bd3a5-b04b-4daf-8e9f-a2b56dacac24" />


### Problema #4: Clase Círculo

Se desarrolla una clase llamada `Circulo` para realizar cálculos geométricos utilizando el radio como dato principal.

Se utiliza un constructor para inicializar el objeto, la constante matemática `M_PI` para representar el valor de π y la función `number_format()` para dar formato a los resultados numéricos.

#### Métodos principales

* `calcularArea()`: calcula el área mediante la fórmula π × radio².
* `calcularPerimetro()`: calcula el perímetro mediante la fórmula 2 × π × radio.

<img width="1058" height="692" alt="image" src="https://github.com/user-attachments/assets/3b3badd6-3905-4a9c-9f4f-ad55bebf6012" />


### Problema #5: Jerarquía de clases (`Persona`, `Estudiante` y `Docente`)

Se crea una jerarquía de clases que representa diferentes tipos de personas dentro de un entorno universitario.

**Persona.php — Clase base**

Contiene los atributos generales que comparten las personas:

* `nombre`
* `apellido`
* `fechaNacimiento`

<img width="986" height="642" alt="image" src="https://github.com/user-attachments/assets/6ec80c3f-b865-4741-8b15-c3d3765920f9" />


**Estudiante.php — Clase derivada**

Hereda de `Persona` y agrega información relacionada con el ámbito académico:

* `codigoEstudiante`
* `indiceAcademico`
* `cohorte`
* `estadoAcademico`
* `modalidadEstudio`

<img width="1105" height="843" alt="image" src="https://github.com/user-attachments/assets/d7025d0c-d0f1-4738-aed7-acc6e0096d83" />


**Docente.php — Clase derivada**

Hereda de `Persona` y agrega información relacionada con el ámbito laboral:

* `codigoDocente`
* `departamento`
* `categoria`
* `maximoTitulo`
* `tipoContratacion`

<img width="1150" height="848" alt="image" src="https://github.com/user-attachments/assets/7c039a94-074b-41eb-9292-fb9ed45c4548" />


Esta estructura permite reutilizar los atributos generales de la clase base y agregar características específicas a cada clase derivada.

---

## Objetivo del proyecto

El objetivo principal de estas prácticas es fortalecer los conocimientos sobre la Programación Orientada a Objetos en PHP mediante ejercicios que permiten comprender la herencia, el encapsulamiento, el comportamiento de los métodos estáticos, las restricciones de herencia y la organización de clases.

Además, los ejercicios ayudan a desarrollar una mejor comprensión de la reutilización del código y de la forma en que se pueden representar entidades y relaciones del mundo real mediante clases y objetos.

---

## Creador del proyecto

**Samuel Orocú**

Grupo: **1S3122**
