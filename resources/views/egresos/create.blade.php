@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Agregar egreso</h1>

        @include('layouts.subview-field-errors')

        {!! Form::open(['route' => 'egresos.store', 'method' => 'post']) !!}

        <form>

            @include('egresos.subview-campos-egresos')

            <button type="submit" class="btn btn-primary">Crear egreso</button>
            
        </form>

        {!! Form::close() !!}
    </div>



@endsection
