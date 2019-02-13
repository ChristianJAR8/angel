<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Para Insertar
    //Para aseguarme que laravel use el nombre de mi tabla
    protected $table = 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_uid',
        'updated_uid',
        'name',
        'phone',
        'email',
        'taxid',
        'date_start',
        'date_end',
        'sort_order',
        'status',
        'year_repeat'
    ];

}
