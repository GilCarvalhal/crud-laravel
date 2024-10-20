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
        'contato',
        'endereco_id'
    ];

    public function getFillable()
    {
        return $this->fillable;
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}
