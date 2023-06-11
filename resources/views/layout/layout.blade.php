<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warmindo App</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-semibold" href="#">
            <img src="{{ asset('./img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ms-5">
            Warmindo
          </a>
        </div>
      </nav>
    <div class="container mx-5 position-relative">
        @yield('container')
    </div>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <style>
        .navbar{
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
</body>
</html>