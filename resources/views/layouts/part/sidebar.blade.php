<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{route('dashboard.index')}}" ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                       
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('report')}}"><i class="fas fa-calendar-day"></i>Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('monthlyview')}}"><i class="fas fa-calendar-alt"></i>Monthly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.index')}}" ><i class="fas fa-bookmark"></i>Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rating.index')}}"><i class="fas fa-star"></i>Rating</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('message.index')}}"><i class="fas fa-envelope"></i>Message</a>
                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu.index')}}" ><i class="fas fa-utensils"></i></i>Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}"><i class="fas fa-fw fa-chart-pie"></i>Category</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('table.index')}}" ><i class="fas fa-fw fa-table"></i>Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('bestoffer.index')}}"><i class="fas fa-heart"></i>Bestoffer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>