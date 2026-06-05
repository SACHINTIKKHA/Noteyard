<head>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
@yield('csslink')


</head>
<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">📚 Noteyard</a>

        <button class="navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#nav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li><a class="nav-link active-link" href="home">Home</a></li>
                <li><a class="nav-link" href="about">About</a></li>
                <li><a class="nav-link" href="contact">Contact</a></li>
                <li><a class="nav-link" href="ebook">📥 Ebooks</a></li>

               

    <li class="ms-3 d-flex align-items-center">

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="m-0">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">
                Logout
            </button>
        </form>

    </li>

    <li class="ms-2">
        <a class="btn btn-warning btn-sm fw-bold" href="studentdashboard">
            📊 Dashboard
        </a>
    </li>

                

            </ul>
        </div>
    </div>
</nav>
