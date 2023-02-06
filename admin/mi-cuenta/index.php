<!DOCTYPE html>
<html lang="es">

<head>
  <title>Dashboard</title>
  <?php require_once '../src/layout/head.php' ?>
</head>

<body>
  <!-- Change Light/Dark mode -->
  <script src="../src/js/theme.min.js"></script>

  <div class="page">
    <!-- Navbar -->
    <?php require_once '../src/layout/header.php' ?>

    <div class="page-wrapper">
      <!-- Page header -->
      <div class="theme-dark bg-transparent">
        <div class="page-header d-print-none text-white">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Mi cuenta
                </div>
                <h2 class="page-title">
                  Configuraciones de la cuenta
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="card">
            <div class="card-body">
              <h2 class="mb-3">Datos personales</h2>
              <div class="row g-3">
                <div class="col-md">
                  <div class="form-label">Nombre</div>
                  <input type="text" class="form-control" value="Tabler">
                </div>
                <div class="col-md">
                  <div class="form-label">Apellido</div>
                  <input type="text" class="form-control" value="560afc32">
                </div>
                <div class="col-md">
                  <div class="form-label">
                    Género
                    <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="De esta manera el sistema sabrá como debe dirigirse a usted como por ejemplo: Bienvenido / Bienvenida / Bienvenid@.">?</span>
                  </div>
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="radios-inline" checked="">
                      <span class="form-check-label">Masculino</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="radios-inline">
                      <span class="form-check-label">Femenino</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="radios-inline">
                      <span class="form-check-label">Otro</span>
                    </label>
                  </div>
                </div>
              </div>
              <h2 class="mt-4 mb-3">Datos de acceso</h2>
              <div class="mb-3">
                <div class="row g-3">
                  <div class="col-md">
                    <div class="form-label">
                      Correo electrónico
                      <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="El correo se utilizará como nombre de usuario para acceder al sistema desde la página de inicio de sesión.">?</span>
                    </div>
                    <input type="email" class="form-control" value="ejemplo@dominio.com">
                  </div>
                  <div class="col-md">
                    <div class="form-label">
                      Contraseña
                      <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="En este campo puede cambiar su contraseña digitando la nueva contraseña.">?</span>
                    </div>
                    <div class="input-group input-group-flat">
                      <input type="password" class="form-control" autocomplete="off" placeholder="Sólo si desea cambiarla">
                      <span class="input-group-text">
                        <a href="#" class="input-group-link">Mostrar</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer text-end">
              <div class="d-flex justify-content-between gap-5">
                <a href="." class="btn btn-ghost-secondary">Cancelar</a>
                
                <div class="w-auto input-group position-relative">
                  <input type="password" class="form-control" placeholder="Contraseña actual">
                  <span class="form-help position-absolute top-50 start-0 translate-middle rounded-circle" style="margin-left: -13px;" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Por su seguridad, el sistema debe confirmar su identidad con su contraseña actual.">?</span>
                  <button class="btn btn-primary" type="button">Actualizar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php require_once '../src/layout/footer.php' ?>
    </div>
  </div>

  <?php require_once '../src/layout/scripts.php' ?>
</body>