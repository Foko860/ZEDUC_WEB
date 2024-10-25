<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'reclamation'; // Si nécessaire, spécifiez le nom de la table

    protected $fillable = [
        'id_command',
        'nom_etudiant',
        'date',
        'type_reclamation', // e.g. Livraison tardive, Non conforme, etc.
        'reponse', // Pour la réponse de l'employé
        'statut', // e.g. 'validée', 'invalide'
    ];
}