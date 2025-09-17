@extends('layout.app')
@section('title','Panel IoT')
@section('content')

<!-- Sub-encabezado tipo breadcrumb -->
<div class="bg-light p-3 border-bottom">
  <div class="container">
    <small class="text-muted">
      ESP32 - L72 GNDR/TST →
      <a href="#" class="text-decoration-none">ProyectoX</a> →
      <a href="#" class="text-decoration-none">Panel demo</a> →
      <span class="fw-bold">Ejecución de Tabla</span>
    </small>
  </div>
</div>

<!-- Contenido principal -->
<div class="container mt-4">
    <h3 class="mb-3">Panel IoT — Monitoreo & Registros</h3>
    <p>Gestión demo (comunicaciones del proyecto), visualización en tabla y preparación del entorno para conectar <b>SENSORES IoT</b>.</p>

    <!-- Botones -->
    <div class="mb-4">
        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Registrar dato
        </a>
        <a href="#" class="btn btn-outline-primary">
            <img src="{{ asset('img/tabla.png') }}" alt="tabla" width="18" class="me-1"> Ver tabla
        </a>
    </div>

    <!-- Tarjetas principales -->
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Sensores en línea</h6>
                        <h3>3</h3>
                        <small>Demo (modo) - Ajustable</small>
                    </div>
                    <img src="{{ asset('img/visual/sensor.png') }}" alt="sensor" width="28">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Última sincronización</h6>
                        <h3>hace 2 min</h3>
                        <small>Simulado para la demo</small>
                    </div>
                    <img src="{{ asset('img/visual/reloj.png') }}" alt="reloj" width="28">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Base de datos</h6>
                        <h3>MYSQL</h3>
                        <small>Conectada vía MySQL</small>
                    </div>
                    <img src="{{ asset('img/visual/basedatos.png') }}" alt="bd" width="28">
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de módulos -->
    <h5 class="mt-4">Módulos</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Gestión de registros</h6>
                        <p class="card-text">Creación y gestión de registros para sensores, proyectos y pruebas.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                    <img src="{{ asset('img/visual/registro.png') }}" alt="registro" width="26">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Dispositivos IoT</h6>
                        <p class="card-text">Integración con dispositivos ESP32/ESP8266, almacenamiento y monitoreo.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                    <img src="{{ asset('img/visual/dispositivo.png') }}" alt="dispositivo" width="26">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Panel tiempo real</h6>
                        <p class="card-text">Gráficos de telemetría (SO2, polvo, temperatura) con WebSockets (simulado).</p>
                        <a href="#" class="btn btn-primary">Procesamiento</a>
                    </div>
                    <img src="{{ asset('img/visual/tiempo.png') }}" alt="tiempo real" width="26">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
