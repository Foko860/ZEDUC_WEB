<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table = 'employe'; // Spécifiez le nom de la table si c'est différent de la convention


    protected $fillable = [
        'id_Employe',
        'nom',
        'prenom',
        'email',
        'poste',
    ];
}
