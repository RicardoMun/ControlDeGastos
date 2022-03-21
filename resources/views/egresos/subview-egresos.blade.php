<div class="card mb-2" >
    <div class="card-body d-flex justify-content-between">

        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $egreso->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $egreso->valor }}</p>
            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y') }}</h6> --}}
        </div>

        <div class="text-right">

            <a href="{{ route('egreso.edit', $egreso->id) }}" class="btn btn-info">
                <i class="fa-solid fa-pen icons" title="Edit post" ></i>
            </a>

            {!! Form::open(['route' => ['egreso.destroy', $egreso->id], 'method' => 'delete']) !!}
            <br>
            {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                'type' => 'submit',
                'title' => "Eliminar egreso",
                'class' => 'btn btn-danger',
                'onclick' => "return confirm('¿Estás seguro de eliminar este egreso?')"
            ])!!}

            {!! Form::close() !!}
        </div>

    </div>
</div>