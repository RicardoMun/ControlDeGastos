<div class="card text-white bg-dark mb-3" >
    <div class="card-body d-flex justify-content-between">

        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Publicado hace: {{ $ingreso->created_at->diffForHumans() }}</h6>
            <p class="card-text">Valor: ${{ $ingreso->valor_ingreso }}</p>
            <p class="card-text">Categoría: {{ $ingreso->categoria }}</p>
            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y') }}</h6> --}}
        </div>

        <div class="text-right">

            <a href="{{ route('ingresos.edit', $ingreso->id) }}" class="btn btn-info">
                <i class="fa-solid fa-pen icons" title="Edit ingreso" ></i>
            </a>

            {!! Form::open(['route' => ['ingresos.destroy', $ingreso->id], 'method' => 'delete']) !!}
            <br>
            {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                'type' => 'submit',
                'title' => "Eliminar ingreso",
                'class' => 'btn btn-danger',
                'onclick' => "return confirm('¿Estás seguro de eliminar este ingreso?')"
            ])!!}

            {!! Form::close() !!}
        </div>

    </div>
</div>
