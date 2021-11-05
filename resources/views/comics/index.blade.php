

@foreach($comics as $c)
    <div class="card">
        <h3>{{ $c->title }}</h3>
        <p>{{ $c->description }}</p>
        <a href="{{ route('comics.show',['id' => $c->id ]) }}">Show</a>
    </div>
@endforeach