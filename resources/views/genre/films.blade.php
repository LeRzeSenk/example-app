<a href="{{route('genre.index')}}">Назад</a>
@foreach($films as $film)
    <ol>
        <li>ID:{{$film->id}}</li>
        <li>Название:{{$film->name}}</li>
        <li>Статус:{{$film->filmStatus()}}</li>
        <li>Создано:{{$film->timeCarbon('M d y')}}</li>
        <li>Постер URL:{{$film->poster_url}}</li>
    </ol>
@endforeach
{{ $films->links() }}
