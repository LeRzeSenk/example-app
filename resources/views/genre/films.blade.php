<a href="{{route('genre.index')}}">Назад</a>
@foreach($films as $film)
    <ol>
        <li>ID:{{$film->id}}</li>
        <li>Название:{{$film->name}}</li>
        <li>{{$film->filmStatus()}}</li>
        <li>{{$film->timeCarbon('M d y')}}</li>
        <li>{{$film->poster_url}}</li>
    </ol>
@endforeach
