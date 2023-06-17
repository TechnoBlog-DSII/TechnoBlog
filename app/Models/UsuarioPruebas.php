<?php

namespace App\Models;

use InvalidArgumentException;

class UsuarioPruebas
{
    public string $name;
    public string $email;
    public int $age;
    public string $password;

    /**
     * @param string $name
     * @param int $age
     * @param string $email
     * @param string $password
     */

    public function __construct(string $name, string $email, int $age, string $password)
    {
        $this->age = $age;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function cambiarNombre($nombre): bool
    {
        $this->name = $nombre;
        return True;
    }

    public function cambiarEdad($edad): int
    {
        $this->age = $edad;
        return $this->age;
    }

    public function cambiarEmail($email): string
    {
        $this->email = $email;
        return $this->email;
    }

    public function cambiarPassword($contrasenia): string
    {
        $this->password = $contrasenia;
        return $this->password;
    }
}
