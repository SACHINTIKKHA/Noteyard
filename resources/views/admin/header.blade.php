 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodlytix - Admin Dashboard</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/icons/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('stylehome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
        
        <ul class="nav-menu" id="sidebarMenu">

    <li class="nav-item">
        <a href="admindashboard" class="nav-link active">
            <i class="bi bi-grid-fill"></i>
            <span>Admin-Dashboard</span>
        </a>
    </li>

    <!-- COLLAPSIBLE MENU -->
   <li class="nav-item">
    <button class="nav-link border-0 bg-transparent w-100 text-start"
            data-bs-toggle="collapse"
            data-bs-target="#user"
           >
       <i class="fa-solid fa-user"></i>
        <span>User</span>
    </button>

    <div class="collapse {{Request::is('adduser') || Request::is('studentlist')?'show':''}}" id="user"  data-bs-parent="#sidebarMenu">
        <ul class="nav flex-column ms-4">
            <li>
                <a href="adduser" class="nav-link {{Request::is('adduser') ? 'active':''}}"><i class="fa-solid fa-user-plus" ></i>Add User</a>
            </li>
            <li>
                <a href="studentlist" class="nav-link {{Request::is('studentlist') ? 'active':''}}"><i class="fa-solid fa-list"></i>User List</a>
            </li>
        </ul>
    </div>
</li>
   <li class="nav-item">
    <button class="nav-link border-0 bg-transparent w-100 text-start"
            data-bs-toggle="collapse"
            data-bs-target="#documentMenu">
       <i class="fa-solid fa-file" ></i>
        <span>Documents</span>
    </button>

    <div class="collapse {{Request::is('upload') || Request::is('document')?'show':''}}" id="documentMenu" data-bs-parent="#sidebarMenu">
        <ul class="nav flex-column ms-4">
            <li>
                <a href="upload" class="nav-link {{Request::is('upload') ? 'active':''}}"><i class="fa-solid fa-upload"></i>Upload Document</a>
            </li>
            <li>
                <a href="document" class="nav-link {{Request::is('document') ? 'active':''}}"> <i class="fa-solid fa-list"></i> Document List</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <button class="nav-link border-0 bg-transparent w-100 text-start"
            data-bs-toggle="collapse"
            data-bs-target="#sub">
        <i class="fa-solid fa-cloud-arrow-up" ></i>
        <span>Subscription</span>
    </button>

    <div class="collapse {{Request::is('subscriptionlist') || Request::is('subscription')?'show':''}}" id="sub" data-bs-parent="#sidebarMenu">
        <ul class="nav flex-column ms-4">
            <li>
                <a href="subscription" class="nav-link {{Request::is('subscription') ? 'active':''}}"> <i class="fa-solid fa-plus"></i> New Subscription</a>
            </li>
            <li>
                <a href="subscriptionlist" class="nav-link {{Request::is('subscriptionlist') ? 'active':''}}"> <i class="fa-solid fa-list"></i> List of Subscription</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <button class="nav-link border-0 bg-transparent w-100 text-start"
            data-bs-toggle="collapse"
            data-bs-target="#pay">
        <i class="fa-solid fa-cloud-arrow-up" ></i>
        <span>Payment</span>
    </button>

    <div class="collapse {{Request::is('paymentuser')?'show':''}}" id="pay" data-bs-parent="#sidebarMenu">
        <ul class="nav flex-column ms-4">
            <li>
                <a href="paymentuser" class="nav-link {{Request::is('paymentuser') ? 'active':''}}"> <i class="fa-solid fa-list"></i> Payment History</a>
            </li>
        </ul>
    </div>
</li>
    

</ul>
            
            <!-- <li class="nav-item">
                <a href="analytics.html" class="nav-link">
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="payments.html" class="nav-link">
                    <i class="bi bi-credit-card-fill"></i>
                    <span>Payments</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="reviews.html" class="nav-link">
                    <i class="bi bi-chat-left-dots-fill"></i>
                    <span>Reviews</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="settings.html" class="nav-link">
                    <i class="bi bi-gear-fill"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="login.html" class="nav-link">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="signup.html" class="nav-link">
                    <i class="bi bi-person-add"></i>
                    <span>Signup</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="forgot-password.html" class="nav-link">
                    <i class="bi bi-eye-fill"></i>
                    <span>Forgot password</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="404.html" class="nav-link">
                    <i class="bi bi-x-circle"></i>
                    <span>404</span>
                </a>
            </li>
             <li class="nav-item">
                <a href="500.html" class="nav-link">
                    <i class="bi bi-x-circle"></i>
                    <span>500</span>
                </a>
            </li> -->
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
                 <div class="dropdown notify-dropdown">
                      

                     <div class="dropdown-menu dropdown-menu-end mt-2">
                        <div id="Notification" class="h-380 scroll-y p-3 custom-scrollbar">
                     </div>
                    </div>
                 </div>

                
                <div class="dropdown notify-dropdown">
                     <div class="dropdown-menu dropdown-menu-end mt-2">
                        <div id="Notification" class="h-380 scroll-y p-3 custom-scrollbar">
                        </div>
                    </div>
                 </div>
                <div class="dropdown profile-dropdown">
                     <div class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="button">
                         <div class="user-profile">
                            <div class="user-avatar">AD</div>
                            <div class="user-info">
                                <h6>{{session('name')}}</h6>
                                <p>Admin </p>
                            </div>
                        </div>
                     </div>
                     <ul class="dropdown-menu dropdown-menu-end mt-2">
                         <li><h6 class="dropdown-header">Settings</h6></li>
                         <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> Profile Settings</a></li>
                         <li><a class="dropdown-item" href="#"><i class="fa-regular fa-bell"></i> Notifications</a></li>
                         <li><a class="dropdown-item" href="#"><i class="fa-solid fa-shield-halved"></i> Privacy &amp; Security</a></li>
                         <li><a class="dropdown-item" href="#"><i class="fa-regular fa-credit-card"></i> Billing</a></li>
                         <li><form action="{{route('logout')}}" method="post">
                              @csrf
                                <button type="submit">Logout</button>
                            </form>
                         </li>
                     </ul>
                 </div>

            </div>
        </div>