@extends('admin.index')

@section('content')
<div class="content-wrapper">

    <div class="d-flex justify-content-between my-3">
    <h3>Data Ruangan</h3>
    <a href="{{route('ruangan.create')}}" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
        Tambah
        <i class="typcn typcn-plus btn-icon-append"></i>
    </a>
    <a href="{{url('generate-pdf')}}" type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
      Tes PDF
      <i class="typcn typcn-plus btn-icon-append"></i>
  </a>
  <a href="{{url('ruangan-pdf')}}" type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
    Unduh Ruangan PDF
    <i class="typcn typcn-plus btn-icon-append"></i>
</a>
<a href="{{url('ruangan-excel')}}" type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
  Unduh Ruangan Excel
  <i class="typcn typcn-plus btn-icon-append"></i>
</a>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="table-responsive pt-3">
            <table class="table table-striped project-orders-table">
              <thead>
                <tr>
                  <th class="ml-5">No</th>
                  <th>Nama Ruangan</th>
                  <th>Kategori Ruangan</th>
                  <th>Gedung</th>
                  <th>Kapasitas</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

              @foreach($ruangan as $r)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $r->nama }}</td>
                  <td>{{ $r->kategoriRuangan->nama }}</td>
                  <td>{{ $r->gedung->nama }}</td>
                  <td>{{ $r->kapasitas }}</td>
                  <td>
                    <form action="{{route('ruangan.destroy',$r->id)}}" method="POST">
                    <div class="d-flex align-items-center">
                      <a href="{{route('ruangan.show',$r->id)}}" class="btn btn-info btn-sm btn-icon-text mr-3" title="Detail Data Ruangan">
                        Detail
                        <i class="typcn typcn-eye btn-icon-append"></i>
                      </a>
                      <a href="{{route('ruangan.edit',$r->id)}}" class="btn btn-success btn-sm btn-icon-text mr-3" title="Edit Data Ruangan">
                        Edit
                        <i class="typcn typcn-edit btn-icon-append"></i>
                      </a>
                      @csrf
                      @method('DELETE')
                      <a href="/ruangan-delete/{{$r->id}}" class="btn btn-danger  btn-sm btn-icon-text mr-3 delete-confirm" role="button">
                        Hapus
                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                    </a>
                      
                    </div>
                  </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection