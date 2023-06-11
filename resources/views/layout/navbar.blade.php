<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warmindo App</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-semibold" href="#">
            <img src="{{ asset('./img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ms-5">
            Warmindo
          </a>
          <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Pemesanan")? 'active' :'' }}" href="/pemesanan">Pemesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Logout")? 'active' :'' }}" href="/logout">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="cover position-relative">
      @yield('cover')
    </div>
      <div class="container mx-5 position-relative mt-3">
        @yield('container')
      </div>
      <script src="/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<style>
  .nav{
    margin-left: 80%;
  }
</style>
</html>