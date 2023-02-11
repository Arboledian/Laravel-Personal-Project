<?php

namespace App\Http\Controllers;

use App\Models\Vtuber;
use Illuminate\Http\Request;

class VtuberController extends Controller
{
    //
    public function index()
    {
        return view('index', [
            //all() devuelve todo la informacion que encuentre
            //latest()->get() devuelve la informacion sorteada por mas reciente, en resumen es casi lo mismo
            //'vtubers' => Vtuber::all()
            //filter es para agregar un filtro a la busqueda
            //'vtubers' => Vtuber::latest()->filter(request(''))->get()
            'vtubers' => Vtuber::latest()->get()

        ]);
    }

    public function displayCharacter()
    {
        return view('character');
    }
}
