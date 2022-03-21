@extends('layouts.app')

@section('content')


<div class="container">

<h1>Hola <strong>{{ $user->name }}</strong> estos son tus ingresos</h1>

@forelse($ingresos as $ingreso)

    @include('ingresos.subview-ingreso')

    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha agregado ingresos
        </div>
    @endforelse

    {{-- <div class="mt-4"></div>
     USAMOS PARA PAGINACIÓN
    {{ $posts->links() }} --}}
</div>


@endsection
