@extends('layout.app')
@section('title','Panel IoT')
@section('content')

<!-- Sub-encabezado tipo breadcrumb -->
<div class="bg-gradient p-3 border-bottom text-white" style="background: linear-gradient(90deg, #0d6efd, #6610f2);">
  <div class="container">
    <small>
      <i class="bi bi-cpu me-1"></i>
      <a href="#" class="text-white text-decoration-underline">ProyectoX</a> →
      <a href="#" class="text-white text-decoration-underline">Panel demo</a> →
      <span class="fw-bold">Ejecución de Tabla</span>
    </small>
  </div>
</div>

<!-- Contenido principal -->
<div class="container mt-4">
    <h2 class="mb-2 fw-bold text-primary">⚡ Panel IoT — Monitoreo & Registros</h2>
    <p class="text-muted">Gestión avanzada de <b>comunicaciones IoT</b>, monitoreo en tiempo real y preparación para conectar <b>SENSORES</b>.</p>

    <!-- Botones principales -->
    <div class="mb-4">
        <a href="#" class="btn btn-primary shadow-sm me-2">
            <i class="bi bi-plus-circle me-1"></i> Registrar dato
        </a>
        <a href="#" class="btn btn-outline-primary shadow-sm">
            <i class="bi bi-table me-1"></i> Ver tabla
        </a>
    </div>

    <!-- Tarjetas resumen -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary">Sensores en línea</h6>
                        <h2 class="fw-bold text-success">3</h2>
                        <span class="badge bg-light text-dark">Demo</span>
                    </div>
                    <i class="bi bi-wifi text-success" style="font-size:2rem;"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary">Última sincronización</h6>
                        <h2 class="fw-bold text-info">hace 2 min</h2>
                        <small class="text-muted">Simulado</small>
                    </div>
                    <i class="bi bi-clock-history text-info" style="font-size:2rem;"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-secondary">Base de datos</h6>
                        <h2 class="fw-bold text-warning">MySQL</h2>
                        <small class="text-muted">Conectada</small>
                    </div>
                    <i class="bi bi-database text-warning" style="font-size:2rem;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de módulos -->
    <h4 class="mt-5 fw-bold text-primary">🔌 Módulos disponibles</h4>
    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover h-100">
                <div class="card-body">
                    <i class="bi bi-journal-check text-primary mb-2" style="font-size:1.8rem;"></i>
                    <h6 class="fw-bold">Gestión de registros</h6>
                    <p class="text-muted">Creación y control de registros para sensores, proyectos y pruebas.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover h-100">
                <div class="card-body">
                    <i class="bi bi-cpu text-success mb-2" style="font-size:1.8rem;"></i>
                    <h6 class="fw-bold">Dispositivos IoT</h6>
                    <p class="text-muted">Integración con ESP32/ESP8266, almacenamiento y monitoreo de datos.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm card-hover h-100">
                <div class="card-body">
                    <i class="bi bi-activity text-danger mb-2" style="font-size:1.8rem;"></i>
                    <h6 class="fw-bold">Panel tiempo real</h6>
                    <p class="text-muted">Gráficos de telemetría (SO2, polvo, temperatura) usando WebSockets.</p>
                    <a href="#" class="btn btn-outline-danger btn-sm">Procesar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .card-hover {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
</style>

@endsection
