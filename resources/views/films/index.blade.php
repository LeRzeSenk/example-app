<a href="{{route('film.create')}}">Создать</a>
@if($film_status)
    <a href="{{route('film.index')}}">Не Опубликованные</a>
@else
    <a href="{{route('film.published.index')}}">Опубликованные</a>
@endif
@foreach($films as $film)
    <ol>
        <li>ID:{{$film->id}}</li>
        <li>Название:{{$film->name}}</li>
        <li>Жанры:@foreach($film->genres as $genre)
            {{$genre->name}},
        @endforeach</li>
        <img src="{{$film->poster()}}" alt="poster"><br>
        <a href="{{route('film.show',$film->id)}}">Перейти</a>
        <a href="{{route('film.edit',$film->id)}}">Редактировать</a>
        <form action="{{route('film.delete',$film->id)}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
    </ol>
    <br><br>
@endforeach
