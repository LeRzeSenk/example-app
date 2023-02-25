<a href="{{route('genre.create')}}">Создать</a>
@foreach($genres as $genre)
    <ol>
        <li>ID:{{$genre->id}}</li>
        <li>Название:{{$genre->name}}</li>
        <li>Кол-во фильмов:{{$genre->films()->count()}}</li>
        <a href="{{route('genre.films.show',$genre->id)}}">Просмотр фильмов</a>
        <a href="{{route('genre.show',$genre->id)}}">Перейти</a>
        <a href="{{route('genre.edit',$genre->id)}}">Редактировать</a>
        <form action="{{route('genre.delete',$genre->id)}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
    </ol>
@endforeach
