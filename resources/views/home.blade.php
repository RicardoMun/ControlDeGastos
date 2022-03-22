@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Hola de nuevo <strong>{{ Auth::user()->name }}</strong>!! </h1>
    <h4>Aquí pueder ver todos tus movimientos</h4>

    <div class="section">
        <div class="row">

            <div class="col s10">
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

            <div class="col s2">
                <table class="table table-dark table-striped table-over">

                    <thead>
                        <tr>
                          <th scope="col">Saldo total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">${{ $total }}</th>
                        </tr>
                    </tbody>

                </table>

                {{-- <div class="d-flex justify-content-center">
                    <h1></h1>
                </div> --}}
            </div>

        </div>
    </div>
<<<<<<< HEAD
    <div class="d-flex justify-content-center">
        <a type="button" class="btn btn-primary" href="{{ route('graphics') }}">Gráfica</a>
    </div>
=======


>>>>>>> daa0ff1a7a68b6e5f038fea2ea052b98a93ebe6e
</div>

@endsection
