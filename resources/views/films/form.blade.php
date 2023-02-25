<form action="{{route('film.store')}}" method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="poster_url">
    <select name="genre_ids" multiple>
        @foreach($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endforeach
    </select>
    @csrf
    <input type="submit">
</form>
