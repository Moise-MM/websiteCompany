<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
    <title>BPServicesParis</title>
  </head>
    
    
    <body>

        <!-- Navabar -->
    <nav
    class="navbar navbar-expand-lg bg-body-tertiary py-0 sticky-top navbar-light bg-white"
  >
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" class="logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">A propos de nous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Nos services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Nos projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pricing">Nous contacter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End navbar -->

        {{ $slot }}

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>