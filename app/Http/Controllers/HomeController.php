<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ingresos = Ingreso::where('user_id', Auth::id())
            ->orderBy('created_at', 'asc') -> simplePaginate(10);

        $egresos = Egreso::where('user_id', Auth::id())
            ->orderBy('created_at', 'asc') -> simplePaginate(10);

        $totalIngresos = 0;
        $totalEgresos = 0;
        foreach($ingresos as $ingreso){
            $totalIngresos += $ingreso -> valor_ingreso;
        }
        foreach($egresos as $egreso){
            $totalEgresos += $egreso -> valor;
        }

        $total = $totalIngresos - $totalEgresos;

        return view('home', compact('ingresos', 'egresos', 'total'));
        
    }
}
