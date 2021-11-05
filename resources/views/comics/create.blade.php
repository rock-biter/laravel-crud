<form action="{{ route('comics.store') }}" method="POST">
    @method('POST')
    @csrf

    <input type="text" name="title" id="title">
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <input type="submit" value="crea">

</form>