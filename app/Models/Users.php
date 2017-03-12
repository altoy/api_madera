<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
    	'nomutilisateur',
		'prenomutilisateur',
		'loginutilisateur',
		'passwordutilisateur',
		'idrole',

    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];}
