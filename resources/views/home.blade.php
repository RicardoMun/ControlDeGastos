@extends('layouts.app')

@section('content')

<div class="container">

    {{-- <h1>Hola de nuevo {{ $user->name }} </h1>
    <h6>Aquí pueder ver todos tus movimientos</h6> --}}

    <table class="table table-dark table-striped table-over">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Ingresos</th>
            <th scope="col">Egresos</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach($ingresos as $ingreso)
                <tr>
                <th scope="row">{{ $ingreso->valor_ingreso}}</th>
                <td>{{ $ingreso->categoria}}</td>
                <td></td>
                <td></td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>


@endsection
