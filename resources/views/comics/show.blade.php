<div class="comic">

    @if($comic)
        <h1 class="title">
        {{ $comic-> title }}
        </h1>
        <p>{{ $comic->description }}</p>
        
    @endif

</div>