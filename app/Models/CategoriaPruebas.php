<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPruebas extends Model
{
    use HasFactory;

    public string $name;

    /**
     * @param string $name
     */
    protected  $fillable = ['name'];

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
