@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Crear egresos</h1>
        @include('layouts.subview-field-errors')

        {!! Form::open(['route' => 'egresos.store', 'method' => 'post']) !!}
            <form>
                <div class="mb-3">
                    <label for="content" class="form-label" >Contenido</label>
                    {!! Form::textarea('content', null,['class'=>"form-control",'rows'=>1] ) !!}
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione categoria</option>
                    <option value="1">Transporte</option>
                    <option value="2">Alimentacion</option>
                    <option value="3">Vivienda</option>
                    <option value="4">Servicios</option>
                    <option value="5">Cine</option>
                    <option value="6">Fiesta</option>
                    <option value="6">Otros</option>
                  </select>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        {!! Form::close() !!}
    </div>



@endsection
