<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratos extends Model
{
    use HasFactory;

    protected $fillable = [
    'tipo',
    'marca',
    'ano_fabricacao',
    'preco',
    'user_id'
    ];

    public function pratos(){
    return $this->belongsTo(Pratos::class,'user_id');
   }


}