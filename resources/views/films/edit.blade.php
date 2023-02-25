<form action="{{route('film.update',$film->id)}}" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" value="{{$film->name}}">
    <input type="file" name="poster_url">
    <select name="genre_ids" multiple>
        @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endforeach
    </select>
    <select name="status">
        @foreach($film->statusList() as $status_id => $status)
            <option value="{{$status_id}}">{{$status}}</option>
        @endforeach
    </select>
    @method('PATCH')
    @csrf
    <input type="submit">
</form>
