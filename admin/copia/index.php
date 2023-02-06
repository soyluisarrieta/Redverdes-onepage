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
                  Modal
                </div>
                <h2 class="page-title">
                  Ventana emergente
                </h2>
              </div>

              <!-- Page title actions -->
              <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-group w-100" role="group">
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-1" autocomplete="off" checked="">
                  <label for="btn-radio-basic-1" type="button" class="btn">Activar</label>
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2" autocomplete="off">
                  <label for="btn-radio-basic-2" type="button" class="btn">Desactivar</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">

          <!-- CONTENIDO AQUI -->

        </div>
      </div>

      <?php require_once '../src/layout/footer.php' ?>
    </div>
  </div>

  <?php require_once '../src/layout/scripts.php' ?>
</body>