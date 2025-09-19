<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Estadísticas IoT')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos globales -->
    <style>
        body {
            background-color: #f7f8fb;
            font-family: "Segoe UI", Roboto, sans-serif;
        }
        .navbar {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .nav-link {
            color: #f1f1f1 !important;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }
        footer {
            background: linear-gradient(90deg, #f8f9fa, #f1f3f5);
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <i class="bi bi-cpu-fill me-1"></i> IoT
    </a>

    <!-- Toggle responsive -->
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fw-semibold">
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-door me-1"></i> Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-table me-1"></i> Tabla</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-ui-checks me-1"></i> Formulario</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- CONTENIDO -->
<main class="container my-5">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="text-center text-muted py-4">
    <small>⚡ Programming Statistic IoT — 2025</small>
</footer>

<!-- Scripts -->
@stack('js')
</body>
</html>
