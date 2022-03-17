@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Crear ingresos</h1>
    @include('layouts.subview-field-errors')

    {!! Form::open(['route' => 'ingresos.store', 'method' => 'post']) !!}
        <form>
            <div class="mb-3">
                <label for="content" class="form-label" >Dinero</label>
                {!! Form::textarea('content', '',['class'=>"form-control",'rows'=>1] ) !!}
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione categoria</option>
                <option value="1">Salario</option>
                <option value="2">Honorario</option>
                <option value="3">Donacion</option>
                <option value="3">Otros</option>
              </select>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    {!! Form::close() !!}
</div>


@endsection
