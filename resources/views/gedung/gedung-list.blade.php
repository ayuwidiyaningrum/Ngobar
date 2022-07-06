@extends('landingpage.index')

@section('content')

<!-- Our Room Area Start -->
<section class="roberto-rooms-area m-5">
  <div class="rooms-slides owl-carousel">
{{-- Looping data gedung --}}
@foreach ($gedungs as $g)
    

          <!-- Single Room Slide -->
          <div class="single-room-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/gedung/'.$g->foto) }});"></div>

              <!-- Content -->
              <div class="room-content">
                  <h2 data-animation="fadeInUp" data-delay="100ms">{{$g->nama}}</h2>
                  <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                      <li><span><i class="fa fa-check"></i> Kode</span> <span>{{$g->kode}}</span></li>
                      <li><span><i class="fa fa-check"></i> Alamat</span> <span>{{$g->alamat}}</span></li>
                  </ul>
                  <form method="POST" action="">
                      <a href="" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="1000ms">View Details</a>
                      <button type="submit" name="proses" value="hapus" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="1000ms" onclick="return confirm('Anda Yakin Data dihapus')">Delete</button>
                      <input type="hidden" name="idx" value="" />
                  
                  </form>

              </div>
          </div>
@endforeach


  </div>
</section>
<!-- Our Room Area End -->
@endsection
