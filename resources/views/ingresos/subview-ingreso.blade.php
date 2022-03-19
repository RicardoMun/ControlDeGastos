<div class="card mb-2" >
    <div class="card-body d-flex justify-content-between">

        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $post->content }}</p>
            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y') }}</h6> --}}
        </div>

        <div class="text-right">

            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">
                <i class="fa-solid fa-pen icons" title="Edit post" ></i>
            </a>

            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
            <br>
            {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                'type' => 'submit',
                'title' => "Remove post",
                'class' => 'btn btn-danger',
                'onclick' => "return confirm('¿Estás seguro de eliminar la publicación?')"
            ])!!}

            {!! Form::close() !!}
        </div>

    </div>
</div>
