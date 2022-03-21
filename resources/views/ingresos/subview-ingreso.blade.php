<div class="card mb-2" >
    <div class="card-body d-flex justify-content-between">

        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $ingreso->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $ingreso->valor_ingreso }}</p>
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
