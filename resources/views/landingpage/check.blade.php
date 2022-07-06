<section class="roberto-about-area section-padding-100-0">
    <!-- Hotel Search Form Area -->
    <div class="hotel-search-form-area">
        <div class="container-fluid">
            <div class="hotel-search-form">
                <form action="#" method="post">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="checkIn">Check In</label>
                            <input type="date" class="form-control" id="checkIn" name="checkin-date">
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="checkOut">Check Out</label>
                            <input type="date" class="form-control" id="checkOut" name="checkout-date">
                        </div>
                        <div class="col-4 col-md-1">
                            <label for="room">Ruangan</label>
                            <select name="room" id="room" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-4 col-md-1">
                            <label for="adults">Dewasa</label>
                            <select name="adults" id="adults" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-4 col-md-2 col-lg-1">
                            <label for="children">Anak2</label>
                            <select name="children" id="children" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="form-control btn roberto-btn w-100">Cek Ketersediaan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6>About Us</h6>
                    <h2>Welcome to <br>APP Peminjaman Ruangan</h2>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">Peminjaman ruangan jauh lebih mudah dengan App Peminjaman Ruangan. Ruangan yang tersedia dipastikan nyaman dan diatas standar rata-rata</h5>
                    <!-- <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Wangsit</span></p>
                    <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"> -->
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/17.jpg')}}" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/18.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/28.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
