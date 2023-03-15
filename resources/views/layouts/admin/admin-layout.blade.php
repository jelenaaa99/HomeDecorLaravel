<!DOCTYPE html>
<html lang="en">
@include('fixed.head')
<body>

<div class="container-fluid container-lg overflow-hidden wrapper p-0 border">

    @include('fixed.admin.nav')

    @yield('content')
</div>
@include('fixed.scripts')
</body>
</html>
