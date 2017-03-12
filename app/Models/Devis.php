<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'devis';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'iddevis',
    	'referencedevis',
    	'datedevis',
    	'prixdevis',

    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
