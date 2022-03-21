@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Agregar ingreso</h1>

    @include('layouts.subview-field-errors')

    {!! Form::open(['route' => 'ingresos.store', 'method' => 'post']) !!}
        <form>

            @include('ingresos.subview-campos-ingreso')

            <button type="submit" class="btn btn-outline-secondary" >Crear ingreso</button>

        </form>
    {!! Form::close() !!}

</div>


@endsection
