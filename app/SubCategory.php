<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{

	public $table='subcategories';
    public $primaryKey='id';

    public $fillable = [
        'subcat_name', 'subcat_status',
    ];
    
}
