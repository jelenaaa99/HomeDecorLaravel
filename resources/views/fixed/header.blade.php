<!--Header1-->
<div class="header1 d-flex justify-content-between p-1 border">
    <div>
        <p class="m-0 p-1 text-muted">Welcome to HomeDecor shop &nbsp; &nbsp; @if(Session::get('user')) {{Session::get('user')->email}} @endif</p>
    </div>
    <div class="mt-1">
        @if(Session::get('user')&& Session::get('user')->role_id==1)
            <a href="{{route('admin')}}" class="text-decoration-bold">Admin &nbsp;</a>
        @endif

        @if(Session::get('user'))
            <a href="{{route('logout')}}" class="text-decoration-bold"> Logout</a>
        @endif

        @if(!Session::get('user'))
            <a href="{{route('login')}}" class="text-decoration-bold">Log in</a> &nbsp;
            <a href="{{route('register')}}" class="text-decoration-bold">Register</a>
        @endif
    </div>
</div>
<!--EndHeader1-->

<!--Header2-->
<div class="header2 d-flex justify-content-between align-items-center">
    <div class="flex-fill px-2">
        <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt="HomeDecor" class="logo"></a>
    </div>

    <div class="social-media-icons d-flex flex-fill justify-content-center px-2">
        <div><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
        <div><a href="https://www.pinterest.com/" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></div>
        <div><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
        <div><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></div>
    </div>
    <div class="basket d-flex flex-fill align-items-stretch px-2">
        <div class="price flex-fill text-end"><small>€0,00</small></div>
        <div class="basket-icon flex-fill text-start px-1"><a href="{{route('cart')}}"><i class="fa-solid fa-basket-shopping"></i></a></div>
    </div>
</div>
<!--EndHeader2-->

<!--Navigation-->
<div class="menu w-100 mt-2">

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-around">
                    @foreach($categories as $cat)
                        <li class="nav-item"> <!--Iskoristi klasu active kad formiras rute-->
                            <a class="nav-link" href="{{route('displaySubcategories', ['parentId'=>$cat->id])}}">{{$cat->name}}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brands')}}">Brands</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
