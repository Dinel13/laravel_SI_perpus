<a href="/admin/buku/{{$book->id}}/edit" class="btn btn-warning">Edit</a>
<button href="/admin/buku/{{$book->id}}/hapus" id="hapus" class="btn btn-danger">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#hapus').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah kamu yakin ingin menghapus data ini?',
            text: "Data yang telah dihapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.value) {
                location.replace(href);
                Swal.fire(
                    'Terhapus!',
                    'Data penulis berhasil dihapus.',
                    'success'
                )
            }
        })
    })
</script>