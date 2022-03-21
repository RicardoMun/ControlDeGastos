@extends('layouts.app')

@section('content')


<div class="container">

<h1>Hola <strong>{{ $user->name }}</strong> estos son tus egresos</h1>

@forelse($egresos as $egreso)

    @include('egresos.subview-egreso')

    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha agregado egresos
        </div>
    @endforelse

    {{-- <div class="mt-4"></div>
     USAMOS PARA PAGINACIÓN
    {{ $posts->links() }} --}}
</div>


@endsection
