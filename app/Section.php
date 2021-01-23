<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
   public $table='sections';
   public $primaryKey='id';

    public $fillable = [
        'image', 'status'
    ];
}
