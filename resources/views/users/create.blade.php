@extends('admin.index')

@section('content')
<div class="content-wrapper">
  <div class="row">

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Input Gedung</h4>
          @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Kode</label>
              <input type="text" name="kode" class="form-control" placeholder="Kode">
            </div>
            <div class="form-group">
              <label>Nama Gedung</label>
              <input type="text"  name="nama" class="form-control" placeholder="Nama Gedung">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control"  placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mr-2" name="proses">Simpan</button>
            <a href="" class="btn btn-light">Batal</a>
          </form>
        </div>
      </div>
    </div>

</div>
  </div>
@endsection
