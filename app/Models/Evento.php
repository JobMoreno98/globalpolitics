<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Evento extends Model
{
    use HasFactory;
    use Searchable;

    public function getRouteAttribute()
    {
        $ruta = route('eventos.show', $this->id);
        return $ruta;
    }


    public function toSearchableArray()
    {
        return [
            'titulo' => $this->titulo,
            'subtitulo' => $this->subtitulo,
            'descripcion' => $this->descripcion,
        ];
    }
}
