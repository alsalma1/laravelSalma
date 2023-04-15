<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = "perros";
    protected $fillable=['nick','password','nom','raça','sexe','edat','color','nom_huma','telefon_huma','foto'];
}
