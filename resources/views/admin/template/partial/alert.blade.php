@if(session('success'))
<br>
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('info'))
<br>
<div class="alert alert-info">{{ session('info') }}</div>
@endif
@if(session('danger'))
<br>
<div class="alert alert-danger">Data berhasil dihapus</div>
@endif
<!-- batal dipake boostrap notidy karen tertimpa
$.notify({

message: "{{session ('danger')}}"
}, {
type: 'danger',
position: 'fixed'
});-->
