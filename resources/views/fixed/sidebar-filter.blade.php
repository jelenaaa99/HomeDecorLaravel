<div class="d-none d-md-block col-md-3 order-last order-lg-first">
    <form method="#" action="#">
        @csrf
        <div class="search-div mt-4">
            <div class="position-relative">
                <input type="text" id="search" name="search" placeholder="Search..." class="align-text-bottom rounded px-2 my-0 w-100">
            </div>
        </div>
        <div class="sort py-4">
            <select class="form-select" name="priceSelect" id="priceSelect">
                <option selected>Select</option>
                <option value="asc">Price ascending</option>
                <option value="desc">Price descending</option>
            </select>
        </div>
        <div class="filter-type p-3">
            <h6 class="fw-bold">Brand</h6>
            @foreach($brands as $b)
            <div class="form-check">
                <input class="form-check-input chbBrand" type="checkbox" value="{{$b->id}}" name="chbBrand[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{$b->name}}
                </label>
            </div>
            @endforeach
        </div>
            <input type="hidden" class="route" name="catName" value="{{$products[0]->route}}">
            <input type="hidden" class="idCat" name="idCat" value="{{$products[0]->category_id}}">
    </form>
</div>
