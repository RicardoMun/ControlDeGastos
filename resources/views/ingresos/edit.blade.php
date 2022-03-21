@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Editar ingresos</h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($ingreso, ['method' => 'put', 'route' => ['ingresos.update', $ingreso->id]]) !!}

        @include('ingresos.subview-campos-ingreso')

        <button type="submit" class="btn btn-outline-secondary">Editar</button>

        {!! Form::close() !!}
    </div>



@endsection
