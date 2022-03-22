@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Hola de nuevo <strong>{{ Auth::user()->name }}</strong>!! </h1>
    <h4>Aquí pueder ver todos tus movimientos</h4>

    <table class="table table-dark table-striped table-over">
        <thead>
          <tr>
            <th scope="col">Ingresos</th>
            <th scope="col">Categoría</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
          </tr>
        </thead>
        <tbody>
            @foreach($ingresos as $ingreso)
                <tr>
                    <th scope="row">{{ $ingreso -> valor_ingreso}}</th>
                    <td>{{ $ingreso -> categoria}}</td>
                    <td>{{ $ingreso -> created_at->format('d/m/Y')}}</td>
                    <td>{{ $ingreso -> created_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            <thead>
                <tr>
                  <th scope="col">Egresos</th>
                  <th scope="col">Categoría</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora</th>
                </tr>
            </thead>

            @foreach($egresos as $egreso)
                <tr>
                    <th scope="row">{{ $egreso -> valor}}</th>
                    <td>{{ $egreso -> categoria}}</td>
                    <td>{{ $egreso -> created_at->format('d/m/Y')}}</td>
                    <td>{{ $egreso -> created_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection
