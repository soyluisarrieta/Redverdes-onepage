## Template Layout `HTML` + `PHP`

```html
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Titulo</title>
  <?php require_once 'src/layout/head.php' ?>
</head>

<body>
  <!-- Change Light/Dark mode -->
  <script src="src/js/theme.min.js"></script>

  <div class="page">
    <!-- Navbar -->
    <?php require_once 'src/layout/header.php' ?>

    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none text-white">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Visión general
              </div>
              <h2 class="page-title">
                Tablero principal
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
              <div class="btn-list">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn btn-dark">
                    Acción secundaria
                  </a>
                </span>
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  Botón de acción rápida
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Botón de acción rápida">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </a>
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

      <?php require_once 'src/layout/footer.php' ?>
    </div>
  </div>

  <?php require_once 'src/layout/scripts.php' ?>
</body>
```
