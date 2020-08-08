@extends('frontend.template.default')

@section('content')
<h4 class="bold">Detail Buku</h4>
<div class="col s12">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{$book->getCover()}}" height="300px">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h5 class="red-text accent-2">{{ $book->title}}</h5>
                <blockquote>
                    <p>{{ $book->desc }}</p>

                </blockquote>
                <p><i class="material-icons">person</i> : {{$book->autor->name }}</p>
                <p><i class="material-icons">book</i> : {{$book->qty }}</p>
            </div>
            <div class="card-action">
                <form action="{{route('buku.pinjam', $book)}}" method="POST">
                    @csrf
                    <input type="submit" class="btn red accent-1 right waves-effect waves-light" value="Pinjam Buku">
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<h5>Buku lainya dari {{$book->autor->name}}..</h5>
<div class="row">
    @foreach($book->autor->books->shuffle()->take(4) as $book)
    
    @include('frontend.template.component.card-book', ['book' => $book] )

    @endforeach
</div>
@endsection