@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Editar egresos</h1>
        @include('layouts.subview-form-errors')

        {!! Form::model($egreso, ['method' => 'put', 'route' => ['egresos.update', $egreso->id]]) !!}

        @include('egresos.subview-campos-egreso')

        <button type="submit" class="btn btn-outline-secondary">Editar</button>

        {!! Form::close() !!}
    </div>



@endsection
