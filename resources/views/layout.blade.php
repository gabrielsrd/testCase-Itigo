<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title', 'Itigo Crud App')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Gabriel Alves - Itigo CRUD App</a>            
        </div>
    </nav>

    <div class="container py-4">
        <h1 class="mb-4">@yield('title', 'CRUD')</h1>
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3">
        2023 - Gabriel Alves
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
