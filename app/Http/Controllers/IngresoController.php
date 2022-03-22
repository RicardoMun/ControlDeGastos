<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\IngresoCreateRequest;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $ingresos = $user->ingresos()
                        ->OrderBy('created_at', 'desc')
                        ->simplePaginate(15);

        return view('ingresos.index', compact('ingresos', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingresos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresoCreateRequest $request)
    {
        $ingreso = new Ingreso();
        $ingreso->fill($request->input());
        $ingreso->user_id = Auth::id();
        $ingreso->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingresos.edit', compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngresoCreateRequest $request, Ingreso $ingreso)
    {
        if ($ingreso->user_id == Auth::id()) {
            $ingreso->fill($request->input());
            $ingreso->save();
            //actualizamos
            return redirect(route('ingresos', $ingreso->user_id)); //route redirecciona por el nombre de la ruta

        }else{
            return view('layouts.validation');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        if($ingreso->user_id == Auth::id()){
            $ingreso->delete();
            return redirect(route('ingresos', $ingreso->user_id));
        }else{

            return view('layouts.validation');

        }
    }
}
