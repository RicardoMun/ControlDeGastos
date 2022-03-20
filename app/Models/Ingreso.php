<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $filable = [
        'valor_ingreso',
        'categoria'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
