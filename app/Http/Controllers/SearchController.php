<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Investigadores;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $eventos = Evento::search($keyword)->get();
        $noticias = Noticia::search($keyword)->get();
        $investigador = Investigadores::search($keyword)->get();

        $collection = collect([]);
        $collection = $collection->concat($eventos);
        $collection = $collection->concat($noticias);
        $collection = $collection->concat($investigador);


        foreach ($collection as $key => $value) {
            if (class_basename($value) == "Investigadores") {
                $value->titulo = $value->nombre;
            }
            $value->tipo = class_basename($value);
        }
        return view('busqueda', compact('collection'));
    }
}
