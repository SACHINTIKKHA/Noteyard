<head>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
@yield('csslink')


</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">📚 eBookHub</a>

        <button class="navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#nav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li><a class="nav-link active-link" href="home">Home</a></li>
                <li><a class="nav-link" href="about">About</a></li>
                <li><a class="nav-link" href="contact">Contact</a></li>
                <li><a class="nav-link" href="ebook">📥 Ebook</a></li>

                <li class="ms-3">
                    <a class="btn btn-outline-light btn-sm" href="studentlogin">Login</a>
                </li>

                <li class="ms-2">
                    <a class="btn btn-gradient btn-sm" href="register">Register</a>
                </li>

                <!-- ✅ Admin Login Button -->
                <li class="ms-2">
                    <a class="btn btn-warning btn-sm fw-bold" href="adminlogin">
                        🔐 Admin
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
