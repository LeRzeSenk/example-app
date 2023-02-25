<form action="{{route('genre.store')}}" method="POST">
    <input type="text" name="name">
    @csrf
    <input type="submit">
</form>
