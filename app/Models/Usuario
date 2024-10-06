<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'usuario';

    protected $connection = 'mysql';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'idade',
        'cpf'
    ];

    public function getFillable()
    {
        return $this->fillable;
    }
}
