<?php
include("pooHerencia5(1).php");

class Estudiante extends Persona {
    protected string $codigoEstudiante;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;   // 1: Activo, 0: Inactivo, 2: Retirado, 3: Graduado
    protected int $modalidadEstudio;  // 1: Presencial, 2: Virtual, 3: Híbrida

    public function __construct(
        string $codigoEstudiante,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoEstudiante = $codigoEstudiante;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getCodigoEstudiante(): string {
        return $this->codigoEstudiante;
    }

    public function getIndiceAcademico(): float {
        return $this->indiceAcademico;
    }

    public function getCohorte(): int {
        return $this->cohorte;
    }

    public function getEstadoAcademico(): int {
        return $this->estadoAcademico;
    }

    public function getModalidadEstudio(): int {
        return $this->modalidadEstudio;
    }
}

// Ejemplo de prueba para Estudiante
$miEstudiante = new Estudiante(
    "8-988-123",
    3.5,
    2023,
    1,
    2,
    "Juan",
    "Pérez",
    "2000-05-15"
);

echo "El nombre del estudiante es: " . $miEstudiante->getNombre() . "<br>";
echo "El apellido es: " . $miEstudiante->getApellido() . "<br>";
echo "La fecha de nacimiento del estudiante es: " . $miEstudiante->getFechaNacimiento() . "<br>";
echo "El código de estudiante es: " . $miEstudiante->getCodigoEstudiante() . "<br>";
echo "El índice académico del estudiante es: " . $miEstudiante->getIndiceAcademico() . "<br>";
echo "El cohorte del estudiante es: " . $miEstudiante->getCohorte() . "<br>";
echo "El estado académico del estudiante es: " . $miEstudiante->getEstadoAcademico() . "<br>";
echo "La modalidad de estudio del estudiante es: " . $miEstudiante->getModalidadEstudio() . "<br>";

?>