<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Parrainage extends Model

    //class Parrainage extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parrainage';

    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = ['id_parrain', 'id_filleul'];
    public $incrementing = false; // La clé primaire n'est pas auto-incrémentée

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; // Pas de colonnes created_at/updated_at

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id_parrain',
        'id_filleul',
        'date_parrainage',
        'points_de_fidelites',
    ];

    /**
     * Relations : Un parrainage est lié à un parrain (user) et un filleul (user).
     */
    public function parrain()
    {
        return $this->belongsTo(User::class, 'id_parrain');
    }

    public function filleul()
    {
        return $this->belongsTo(User::class, 'id_filleul');
    }
}
