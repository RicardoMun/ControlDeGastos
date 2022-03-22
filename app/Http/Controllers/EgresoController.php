<?php

namespace App\Http\Controllers;

use App\Http\Requests\EgresoCreateRequest;
use App\Models\Egreso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $egresos = $user->egresos()
                        ->orderBy('created_at','desc')
                        ->simplePaginate(10);

        return view('egresos.index', compact('egresos', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('egresos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EgresoCreateRequest $request)
    {
        $egreso = new Egreso();
        $egreso->fill($request->input());
        $egreso->user_id = Auth::id();
        $egreso->save();

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
    public function edit(Egreso $egreso)
    {
        return view('egresos.edit', compact('egreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EgresoCreateRequest $request, Egreso $egreso)
    {
        if ($egreso->user_id == Auth::id()) {
            $egreso->fill($request->input());
            $egreso->save();
            //actualizamos
            return redirect(route('egresos', $egreso->user_id)); //route redirecciona por el nombre de la ruta

        }else{
            return back() -> with('status', "Tu no eres el dueño de estos movimientos :)");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egreso $egreso)
    {
        if($egreso->user_id == Auth::id()){
            $egreso->delete();
            return redirect(route('egresos', $egreso->user_id));
        }else{

            @include('layouts.subview-status');
            return redirect(route('Inicio'));

        }
    }
}
