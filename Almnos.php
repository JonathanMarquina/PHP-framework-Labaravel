<?php
Class alumno
{
  Public $Primer_Nombre;
  Public $Segundo_Nombre;
  Piblic $Nota;
  Public function __construct($Primer_Nombre, $Segundo_Nombre, $Nota)
  { $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
$person1 = new Person('Duilio', 'Palacios');
$person2 = new Person('Ramon', 'Lapenta');
//
echo "{$person1->fullName()} es amigo de {$person2->fullName()}";

    
