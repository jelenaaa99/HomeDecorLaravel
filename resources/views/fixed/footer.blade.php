<!--Footer-->
<footer>
    <div class="row m-0">
        <div class="col-6 col-sm-4 pt-3">
            <p class="fw-bold text-white text-justify">Navigation</p>
            <ul class="text-justify mx-auto p-0">
                @foreach($categories as $cat)
                    <li><a href="{{route('displaySubcategories', ['parentId'=>$cat->id])}}">{{$cat->name}}</a></li>
                @endforeach
                <li><a href="{{route('brands')}}">Brands</a></li>
            </ul>
        </div>
        <div class="col-6 col-sm-4 pt-3">
            <p class="fw-bold text-white text-justify">About us</p>
            <ul class="text-justify mx-auto p-0">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('contact')}}">Contact us</a></li>
                <li><a href="{{route('author')}}">Author</a></li>
            </ul>
        </div>
        <div id="payment" class="d-none d-sm-block col-4 pt-3">
            <p class="fw-bold text-white text-justify">Payment</p>
            <div class="row m-0">
                <div class="col-sm-4 d-none d-sm-block">
                    <img src="{{asset('assets/img/maestro.png')}}" alt="Maestro card" class="img-fluid">
                </div>
                <div class="col-4">
                    <img src="{{asset('assets/img/visa.png')}}" alt="Visa card" class="img-fluid">
                </div>
                <div class="col-4">
                    <img src="{{asset('assets/img/paypal.png')}}" alt="Paypal" class="img-fluid">
                </div>
                <div class="col-4">
                    <img src="{{asset('assets/img/master.png')}}" alt="Master card" class="img-fluid">
                </div>
                <div class="col-4">
                    <img src="{{asset('assets/img/diners.png')}}" alt="Diners International" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="row p-2">
        <div class="col-12 text-center text-white">
            &copy; Copyright 2022 HomeDecor. All rights reserved.
        </div>
    </div>
</footer>
<!--EndFooter-->
