<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2 d-flex flex-column">
    <img src="{{ $product->admin_img==1 ? asset("storage/products/" .$product->img) : asset('assets/img/'.$product->img)}}" alt="{{$product->name}}" class="img-fluid">
    <p class="text-uppercase text-muted">{{$product->brandName}}</p>
    <p>{{$product->name}}</p>
    <div class="flex-fill d-flex flex-column justify-content-end">
        <a href="{{route('singleProduct', ['route'=>$product->route, 'id'=>$product->id])}}"><small>See details</small></a>
        <p class="m-0">€{{$product->price}}</p>
    </div>
</div>

