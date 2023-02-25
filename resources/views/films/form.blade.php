<form action="{{route('film.store')}}" method="POST" formenctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file">
    <select name="genre_ids" multiple>
        @foreach($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endforeach
    </select>
    @csrf
    <input type="submit">
</form>
