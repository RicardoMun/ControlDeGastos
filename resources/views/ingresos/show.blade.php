@extends('layouts.app')

@section('content')

<div class="container">

<h1>Publicaciones de {{ $user->name }}</h1>

@forelse($ingresos as $ingreso)

    <div class="card mb-2" >
        <div class="card-body">
            @include('layouts.subview-post')
        </div>
    </div>
    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha publicado mensajes
        </div>
    @endforelse

    <div class="mt-4"></div>
    {{-- USAMOS PARA PAGINACIÓN --}}
    {{ $ingresos->links() }}
</div>


@endsection
