<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Blog</title>
    <style>
        /* Active link styles */
        .nav-link.active {
            text-decoration: underline;
            color: red !important; /* Override the default color */
        }

        /* Increased spacing between nav items for desktop */
        @media (min-width: 1024px) {
            .navbar-nav .nav-item {
                margin-right: 30px; /* Adds more gap between items */
            }
        }

        /* Fix for Bootstrap collapse issue on small screens (navbar-toggler behavior) */
        .navbar-collapse {
            flex-grow: 0;
        }

        /* Add some space between the navbar and the content */
      

        /* Style for navbar items for better spacing on mobile and desktop */
        .navbar-nav .nav-item {
            margin-right: 80px; /* Default margin for spacing */
        }

        /* Fix for last item without margin */
        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }
        .navbar-nav .nav-item:last-child {
    margin-right: 0;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="/">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Home link with active class check -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>

                    <!-- Profile link with active class check -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="/profile">Profile</a>
                    </li>

                    <!-- Create link with active class check -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('create') ? 'active' : '' }}" href="/create">Create</a>
                    </li>

                    <!-- Blogs link with active class check -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blogs') ? 'active' : '' }}" href="/blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('myblogs') ? 'active' : '' }}" href="/myblogs">MyBlogs</a>
                    </li>
                    <!-- About Us link with active class check -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @section('main')
        @show
    </div>
</body>
</html>
