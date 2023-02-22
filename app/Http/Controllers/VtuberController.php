<?php

namespace App\Http\Controllers;

use App\Models\Vtuber;
use Illuminate\Http\Request;

class VtuberController extends Controller
{
    //
    //use dd(request()); for debuging
    public function index()
    {
 //       dd(request('search'));
        return view('index', [
            //all() devuelve todo la informacion que encuentre
            //latest()->get() devuelve la informacion sorteada por mas reciente, en resumen es casi lo mismo
            //'vtubers' => Vtuber::all()
            //filter es para agregar un filtro a la busqueda
            //'vtubers' => Vtuber::latest()->filter(request(''))->get()
//            'vtubers' => Vtuber::latest()->get()
            'vtubers' => Vtuber::latest()->filter(request(['search']))->get()
         ]);
    }

    public function displayCharacter(Vtuber $vtuber)
    {
        return view('character',[
            'vtuber' => $vtuber
        ]);

    }
}
