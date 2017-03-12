<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prject';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'idprojet',
    	'nomprojet',
    	'referenceprojet',
    	'dateprojet',
    	'statutprojet',
    	'reduction',
    	'idclient',
    	'iddevis',
    	'idmodalité',
    	'idutilisateur',
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
