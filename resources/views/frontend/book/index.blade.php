@extends('frontend.template.default')

@section('content')

<h2>Daftar Buku</h2>
<blockquote>
    <p class="flow-text"> Koleksi buku yang bisa kamu baca dan pinjam</p>
</blockquote>
<div class="row">
    @foreach($books as $book)
    @include('frontend.template.component.card-book', ['book' => $book] )

    @endforeach
</div>

{{ $books->links('vendor.pagination.materialize')}}


@endsection