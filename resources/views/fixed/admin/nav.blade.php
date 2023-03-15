<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('adminProducts')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}#users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('showOrders')}}">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">HomeDecor - main</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
