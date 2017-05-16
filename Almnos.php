<?php
Class Alumno
{
  Public $Primer_Nombre;
  Public $Segundo_Nombre;
  Public $Nota;
  Public function __construct($Primer_Nombre, $Segundo_Nombre, $Nota)
  { 
     $this->Primer_Nombre = $Primer_Nombre;
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
$alumno1 = new Alumno('Julio', 'Pereda', 12);
$alumno2 = new Alumno('Jhon', 'Reyes', 18);

//
echo "{$alumno1->fullName()} tiene una nota de {$alumno1->Notas()}"."\n"; 
echo "{$alumno2->fullName()} tiene una nota de {$alumno2->Notas()}";
