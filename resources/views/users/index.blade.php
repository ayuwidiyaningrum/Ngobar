@extends('admin.index')

@section('content')
<div class="content-wrapper">
  <div class="d-flex justify-content-between m-2">
<h3>Data User</h3>
<a href="" type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">
  Tambah
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
                  <th>Kode Gedung</th>
                  <th>Nama Gedung</th>
                  <th>Alamat</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($gedungs as $g)
                      
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{$g->kode}}</td>
                  <td>{{$g->nama}}</td>
                  <td>{{$g->alamat}}</td>
                 
                  <td>
                    <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                        Edit
                        <i class="typcn typcn-edit btn-icon-append"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                        Delete
                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                      </button>
                    </div>
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
