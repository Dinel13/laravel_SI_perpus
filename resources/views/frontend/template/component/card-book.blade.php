<div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{$book->getCover()}}" height="200px">
            </div>
            <div class="card-stacked">
                <a href="{{route('buku.show', $book)}}">
                    <div class="card-content">
                        <h6>{{ Str::limit($book->title, 22)}}</h6>
                        <p>{{ Str::limit($book->desc, 70)}}</p>
                    </div>
                    <div class="card-action">
                        <form action="{{route('buku.pinjam', $book)}}" method="POST">
                            @csrf
                            <input type="submit" class="btn blue accent-1 right waves-effect waves-light" value="Pinjam Buku">
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </div>