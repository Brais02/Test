<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    /*  Indica de que tabla se cogen los datos y 
        que datos se oueden rellenar
    */
    protected $table = 'codes';
    protected $fillable = [
        'name',
        'activated',
        'user_id',
        'offers_id'
    ];
}
