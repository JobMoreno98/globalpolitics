<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class requisitosconhorte extends Model
{
    use HasFactory;
    use SoftDeletes; //implementar la clase
    protected $dates = ['deleted_at']; //se registra la columna nueva
}
