<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Client extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'client';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'idclient',
    	'nomclient',
    	'adresseclient',
    	'adresse2client',
    	'cpclient',
    	'villeclient',
    	'telclient',
    	'mailclient',
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
