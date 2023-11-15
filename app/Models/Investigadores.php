<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;



class Investigadores extends Model
{
    use SoftDeletes; //implementar la clase
    protected $dates = ['deleted_at']; //se registra la columna nueva
    use HasFactory;
    use Searchable;

    public function getRouteAttribute()
    {
        $ruta = route('nab');
        return $ruta. "#".$this->id;
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }
}
