<a href="{{route('film.index')}}">Назад</a><br>
<ol>
    <li>ID:{{$film->id}}</li>
    <li>Название:{{$film->name}}</li>
    <li>Жанры:@foreach($film->genres as $genre)
            {{$genre->name}},
        @endforeach</li>
    <img src="{{asset('storage/default.jpg')}}" alt="poster"><br>
    <a href="{{route('film.show',$film->id)}}">Просмотр фильмов</a>
    <a href="{{route('film.show',$film->id)}}">Перейти</a>
    <a href="{{route('film.edit',$film->id)}}">Редактировать</a>
    <form action="{{route('film.delete',$film->id)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить">
    </form>
</ol>
