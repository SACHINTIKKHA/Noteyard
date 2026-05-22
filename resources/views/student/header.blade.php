 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodlytix - Admin Dashboard</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/icons/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('csslink')
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="logo" href="index.html">
                <i class="bi bi-basket2-fill"></i>
                <span class="logo-text">Ebook</span>
            </a>
            <button class="menu-toggle" id="menuToggle">
                <i class="bi bi-list"></i>
            </button>
        </div>
        
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-grid-fill"></i>
                    <span>Edit-Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="newsubscription" class="nav-link {{ Request::is('newsubscription') ? 'active' : '' }}">
                    <i class="bi bi-receipt"></i>
                    <span>New Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="activatedplans" class="nav-link {{ Request::is('planactivated') ? 'active' : '' }}">
                    <i class="bi bi-shop"></i>
                    <span>Activated Plan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="fav" class="nav-link {{ Request::is('fav') ? 'active' : '' }}">
                    <i class="bi bi-heart"></i>
                    <span>My Favourite</span>
                </a>
            </li>
             <li class="nav-item">
                <a href="purchase" class="nav-link {{ Request::is('purchase') ? 'active' : '' }}">
                    <i class="bi bi-bag-fill"></i>
                    <span>Purchase History</span>
                </a>
            </li>
            
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Bar -->
       <div class="top-bar">
    <button class="menu-toggle-mobile" id="MenuToggleMobile">
        <i class="bi bi-list"></i>
    </button>

    <div class="search-bar">
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search orders, customers, restaurants...">
    </div>

    <div class="top-bar-actions">
      
        <a href="ebook" class="home-btn">
    <i class="bi bi-house-door-fill"></i>
    <span>Ebook</span>
</a>

        <div class="dropdown profile-dropdown">
            <div class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="user-profile">
                    <div class="user-avatar"><img src="{{ asset('storage/' . (session('image') ?? 'uploads/default.jpg')) }}"  alt="Profile Image" class="img-small-avatar rounded-circle">
</div>


                    <div class="user-info">
                        <h6>{{session('name')}}</h6>
                        <p>User Login</p>
                    </div>
                </div>
            </div>
       
                     <ul class="dropdown-menu dropdown-menu-end mt-2">
                         <li><h6 class="dropdown-header">Settings</h6></li>
                         <li><a class="dropdown-item" href="{{'password'}}"> <i class="fa-solid fa-key"></i>Password</a></li>
                         <li>
                             <div class="sign-out">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                             <button type="submit">Logout</button>
                                </form> 
                            </div>
                         </li>
                     </ul>
                 </div>

            </div>
        </div>
    