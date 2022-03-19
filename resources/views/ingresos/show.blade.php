@extends('layouts.app')

@section('content')

<div class="container">

<h1>Hola {{ $user->name }} estos son tus ingresos</h1>

@forelse($ingresos as $ingreso)

    <div class="card mb-2" >
        <div class="card-body">
            @include('layouts.subview-post')
        </div>
    </div>
    @empty
        <div class="alert alert-info" role="alert">
            Aún no tienes ingresos visibles
        </div>
    @endforelse

    <div class="mt-4"></div>
    {{-- USAMOS PARA PAGINACIÓN --}}
    {{ $ingresos->links() }}
</div>


@endsection
