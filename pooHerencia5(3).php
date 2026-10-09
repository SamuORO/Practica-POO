<?php
include("pooHerencia5(1).php");

class Docente extends Persona {
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;       // Titular, Adjunto, Especial, Interino
    protected string $maximoTitulo;    // Magíster, Doctor/PhD, Licenciado
    protected string $tipoContratacion; // Tiempo Completo, Tiempo Parcial, Por horas

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string {
        return $this->departamento;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getMaximoTitulo(): string {
        return $this->maximoTitulo;
    }

    public function getTipoContratacion(): string {
        return $this->tipoContratacion;
    }
}

// Ejemplo de prueba para Docente
$miDocente = new Docente(
    "DOC-4589",
    "Sistemas y Computación",
    "Titular",
    "Doctor/PhD",
    "Tiempo Completo",
    "Carlos",
    "Mendoza",
    "1980-11-20"
);

echo "<br>--- Datos del Docente ---<br>";
echo "Nombre: " . $miDocente->getNombre() . " " . $miDocente->getApellido() . "<br>";
echo "Código Docente: " . $miDocente->getCodigoDocente() . "<br>";
echo "Departamento: " . $miDocente->getDepartamento() . "<br>";
echo "Categoría: " . $miDocente->getCategoria() . "<br>";
echo "Máximo Título: " . $miDocente->getMaximoTitulo() . "<br>";
echo "Tipo de Contratación: " . $miDocente->getTipoContratacion() . "<br>";

?>