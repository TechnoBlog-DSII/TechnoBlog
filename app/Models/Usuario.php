<?php

namespace App\Models;

use InvalidArgumentException;

class Usuario
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

    public function defaultName($nombre): bool
    {
        $this->name = $nombre;
        return True;
    }

    public function minAge(): int
    {
        $this->age = 18;
        return $this->age;
    }


}