<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
       // Spécifier le nom de la table
       protected $table = 'produit'; // Table 'produit' dans la base de données
       protected $primaryKey = 'id_Produit';
    
       // Les colonnes de la table qui sont modifiables
       protected $fillable = ['nom', 'description', 'prix','quantite', 'image_url'];
}
