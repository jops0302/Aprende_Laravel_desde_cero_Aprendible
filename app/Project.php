<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table = "my_table"; en caso de la convencion que tiene laravel por defecto se puede usar esta linea de codigo para difinir la tabla
 
    // protected $guarded = ['id'] esta propiedad hace lo contrario a fillable, guarda todos los campos excepto los que estan aqui escritos

    // protected $fillable = [
    //     'title',
    //     'url',
    //     'description'
    // ];

    protected $guarded = [];

    public function getRouteKeyName(){
        return 'url';
    }

}
