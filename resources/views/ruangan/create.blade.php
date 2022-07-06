@extends('admin.index')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Input Ruangan</h4>
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
                <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Ruangan</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama" class="form-control" placeholder="Nama Ruangan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kategori Ruangan</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="kategori_ruangan_id">
                        <option value="">-- Pilih Kategori Ruangan --</option>
                        @foreach($kategori_ruangan as $kat)
                            <option value="{{$kat->id}}">{{$kat->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gedung</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="gedung_id">
                          <option value="">-- Pilih Gedung --</option>
                          @foreach($gedung as $g)
                              <option value="{{$g->id}}">{{$g->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Lantai</label>
                    <div class="col-sm-9">
                      <input type="number" name="lantai" class="form-control" placeholder="Lantai">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kapasitas</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="kapasitas" placeholder="kapasitas">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Upload Foto</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="foto1">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" name="proses">Simpan</button>
                  <a href="{{url('gedung')}}" class="btn btn-success">Batal</a>
                </form>
              </div>
            </div>
          </div>
    </div>


  </div>
@endsection