<?php

namespace Modules\Productos\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre'];
    
    // Indica que no se usarán los timestamps
    public $timestamps = false;
}
