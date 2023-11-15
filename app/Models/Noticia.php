<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;


class Noticia extends Model
{
    use SoftDeletes; //implementar la clase
    protected $dates = ['deleted_at']; //se registra la columna nueva
    use HasFactory;
    use Searchable;

    public function getRouteAttribute()
    {
        $ruta = route('noticias.show', $this->id);
        return $ruta;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }
}
