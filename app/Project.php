<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // the fields listed below are the only fillable fields. This protects u from 
    // the user editing other fields and inserting malicious data e.g editing the id
    
    protected $fillable = [
        'title', 'description'
    ];
}
