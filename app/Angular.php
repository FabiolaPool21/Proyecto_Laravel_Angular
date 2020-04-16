<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angular extends Model
{
    protected $table = 'tareas';

    protected $primarykey = 'id';

    protected $fillable = ['nombre'];
}
