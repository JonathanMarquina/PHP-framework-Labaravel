<?php
Class Alumno
{
  Public $Primer_Nombre;
  Public $Segundo_Nombre;
  Public $Nota;
  Public function __construct($Primer_Nombre, $Segundo_Nombre, $Nota)
  { 
     $this->Primero_Nombre = $Primero_Nombre;
     $this->Segundo_Nombre = $Segundo_Nombre;
     $this->Nota = $Nota;
    }
    public function fullName()
    {
        return $this->Primer_Nombre . ' ' . $this->Segundo_Nombre;
    }
    public function Notas()
    {
      return $this->Nota;
    }
}
$alumno1 = new Alumno('Julio', 'Pereda');
$alumno2 = new Alumno('Jhon', 'Reyes');
$nota1 = new Alumno(12);
$nota2 = new Alumno(18);

//
echo "{$alumno1->fullName()} tiene una nota de {$nota1->Notas()}";
echo "{$alumno2->fullName()} tiene una nota de {$nota2->Notas()}";
