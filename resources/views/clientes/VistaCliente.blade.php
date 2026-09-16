@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
<!-- Encabezado de la página -->
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Gestión de Clientes</h3>
            </div>
            <div class="col-sm-6 text-end">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">
                    <i class="bi bi-person-plus-fill me-1"></i> Nuevo Cliente
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Contenido principal -->
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Alerta de éxito -->
                @if(session('exito'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> {{ session('exito') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Tarjeta / Card de AdminLTE 4 -->
                <div class="card card-primary card-outline mb-4">
                    <div class="card-header align-items-center d-flex">
                        <h3 class="card-title mb-0">Listado de Clientes</h3>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 80px" class="text-center">ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th style="width: 120px" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($clientes as $cliente)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $cliente->id_cliente }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->apellido }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-info" title="Editar"> <!-- boton de editar -->
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Eliminar"> <!-- boton de editar -->
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4 text-muted">
                                                <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                                                No hay clientes registrados en la base de datos.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Footer opcional de la Card para mostrar totales -->
                    <div class="card-footer clearfix text-muted fs-7">
                        Total de clientes: <strong>{{ $clientes->count() }}</strong>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection