<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded =[]; //$fillable = ['title','url','description'];

    //Project por defecto consulta la tabla como projects en plural y quitando la mayuscula (eloquent hace esto por defecto)
    //use HasFactory;
    public function getRouteKeyName()
    {
        return 'url';
    }
}
