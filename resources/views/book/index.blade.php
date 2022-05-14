<h1>book view</h1>

{{$books}}
@foreach($books as $book)
    <h2>{{$book->id}}</h2>
    <h2>{{$book->name}}</h2>
    <h2><a href="{{Route::current->getName()=='books'}}">show</a></h2>
@endforeach
