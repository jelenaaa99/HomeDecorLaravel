<!DOCTYPE html>
<html lang="en">
@include('fixed.head')
<body>

<div class="container-fluid container-lg overflow-hidden wrapper p-0 border">

    @include('fixed.header')

    <div id="products-page" class="my-5">
        <div class="row m-0">
            @yield('content')
        </div>
    </div>

    @include('fixed.footer')
</div>
@include('fixed.scripts')
</body>
</html>
