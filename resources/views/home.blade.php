@extends('frontend.template.default')

@section('content')
<div class="row">
    <h3>BUku yang sedang DIpinjam</h3>
    @foreach($books as $book)
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
                </div>
              
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection