@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Agregar egreso</h1>

        @include('layouts.subview-form-errors')

        {!! Form::open(['route' => 'egresos.store', 'method' => 'post']) !!}

        <form>

            @include('egresos.subview-campos-egreso')

            <button type="submit" class="btn btn-outline-secondary">Crear egreso</button>

        </form>

        {!! Form::close() !!}
    </div>



@endsection
