<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $ingreso->cantidad }}</p>
            <p class="card-text">{{ $ingreso->categoria }}</p>
        </div>


        @auth {{-- autenticacion --}}
            @if ($post->user_id == Auth::id())
                <div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.edit', $ingresos->id) }}" >
                            <i class="fa-solid fa-pen-to-square" tittle="Editar post"></i>
                        </a>
                        {!! Form::open(['route' => ['posts.destroy', $ingresos->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class="fa-solid fa-trash-can text-danger"></i>', [
                                                'type' => 'submit',
                                                'title' => 'Remover post',
                                                'class' => 'mySize',
                                                'onclick' => "return confirm('¿Estás seguro de eliminar la publicación?')",
                                            ])
                            !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif
        @endauth
    </div>
</div>
