<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistema Laravel')</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AdminLTE 4 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/adminlte/css/adminlte.min.css') }}">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

  <!-- Header / Navbar -->
  <nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
      <a href="#" class="brand-link">
        <span class="brand-text fw-light"><b>Mi Sistema</b> Laravel</span>
      </a>
    </div>
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
          <li class="nav-item">
            <a href='/' class="nav-link active"> <!-- rederigir la pagina principal -->
                 <i class="nav-icon bi bi-speedometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- AQUI VA EL BOTON DEL NUEVO CLIENTE -->

          <!-- Opción 2: Nuevo Cliente (Justo debajo de Dashboard) -->
           <li class="nav-item">
            <a href="{{ route('clientes.create') }}" class="nav-link {{ request()->routeIs('clientes.create') ? 'active' : '' }}">
             <i class="nav-icon bi bi-person-plus-fill"></i>
             <p>Nuevo Cliente</p>
            </a>
           </li>

           <!-- AQUI VA EL BOTON DEL NUEVO CLIENTE -->

          <!-- Opción 2: Nuevo Cliente (Justo debajo de Dashboard) -->
           <li class="nav-item">
            <a href="{{ route('clientes.create') }}" class="nav-link {{ request()->routeIs('clientes.create') ? 'active' : '' }}">
             <i class="nav-icon bi bi-box-seam-fill"></i>
             <p>Nuevo Producto</p>
            </a>
           </li>

           <!-- AQUI VA EL BOTON DEL NUEVO CLIENTE -->

          <!-- Opción 2: Nuevo Cliente (Justo debajo de Dashboard) -->
           <li class="nav-item">
            <a href="{{ route('clientes.create') }}" class="nav-link {{ request()->routeIs('clientes.create') ? 'active' : '' }}">
             <i class="nav-icon bi bi-tags-fill"></i>
             <p>Nueva Categoría</p>
            </a>
           </li>

           <!-- Opción 2: Nuevo Cliente (Justo debajo de Dashboard) -->
           <li class="nav-item">
            <a href="{{ route('clientes.create') }}" class="nav-link {{ request()->routeIs('clientes.create') ? 'active' : '' }}">
             <i class="nav-icon bi bi-cart-plus-fill"></i>
             <p>Nuevo Pedido</p>
            </a>
           </li>


        </ul>
      </nav>
    </div>
  </aside>

  <!-- Contenido Dinámico -->
  <main class="app-main">
      @yield('content')
  </main>

  <!-- Footer -->
  <footer class="app-footer">
    <div class="float-end d-none d-sm-inline">Versión 1.0</div>
    <strong>Copyright &copy; 2026.</strong> Todos los derechos reservados.
  </footer>

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/adminlte/js/adminlte.min.js') }}"></script>
</body>
</html>