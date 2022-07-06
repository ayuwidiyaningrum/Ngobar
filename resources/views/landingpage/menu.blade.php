<div class="classy-menu">
    <!-- Menu Close Button -->
    <div class="classycloseIcon">
        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
    </div>
    <!-- Nav Start -->
    <div class="classynav">
        <ul id="nav">
            <li class="active"><a href="{{url('home')}}">Home</a></li>
            <li><a href="">Rooms</a></li>
            <li><a href="#">Property</a>
                <ul class="dropdown">
                    <li><a href="{{url('gedung-list')}}">- Gedung</a></li>
                    <li><a href="">- Fasilitas</a></li>
                </ul>
            </li>
            <li><a href="">Contact</a></li>
            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="#">{{ Auth::user()->name }}</a>
                <ul class="dropdown">
                    <li><a href="">- Kelola User</a></li>
                    <li><a href="">- Profile</a></li>
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">- Logout</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                    @csrf
                    </form>    
                    </li>
                </ul>
            </li>
            @endguest
        </ul>

        <!-- Search -->
        <div class="search-btn ml-4">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>

        <!-- Book Now -->
        <div class="book-now-btn ml-3 ml-lg-5">
            <a href="#">Pesan Sekarang <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- Nav End -->
</div>
