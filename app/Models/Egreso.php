<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'categoria'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
