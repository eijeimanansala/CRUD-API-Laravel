<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'age',
        'housenumber',
        'street',
        'barangay',
        'city',
        'state',
        'country',
        'zipcode',
        'email',
        'contactnumber'
    ];
}
