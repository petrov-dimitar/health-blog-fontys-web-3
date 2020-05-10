<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // this model references to recipes table in the db
    protected $table = 'recipes';
}
