<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commande_client', 'commande_date', 'commande_information'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}