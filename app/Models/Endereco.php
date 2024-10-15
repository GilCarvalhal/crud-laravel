<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'endereco';

    protected $primaryKey = 'id';

    protected $connection = 'mysql';

    protected $fillable = [
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'numero'
    ];

    public function getFillable()
    {
        return $this->fillable;
    }
}
