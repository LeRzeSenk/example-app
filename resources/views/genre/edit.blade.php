<form action="{{route('genre.update',$genre->id)}}" method="POST">
    <input type="text" name="name" value="{{$genre->name}}">
    @method('patch')
    @csrf
    <input type="submit">
</form>
