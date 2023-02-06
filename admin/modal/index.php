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
                  <label for="btn-radio-basic-1" type="button" class="btn bg-transparent" title="Mostrar Modal en la página de inicio">Activar</label>
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2" autocomplete="off">
                  <label for="btn-radio-basic-2" type="button" class="btn bg-transparent" title="Ocultar Modal en la página de inicio">Desactivar</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-cards">
            <div class="col-12">
              <div class="card mx-auto" style="max-width: 800px;">
                <div class="card-body">
                  <div class="row py-3">
                    <div class="col-md">
                      <div style="height: 500px;">
                        <div class="w-full h-full shadow p-3" style="background-image: url(https://picsum.photos/1000/1000); background-size: cover;">
                          <label for="image">
                            <span class="btn btn-primary shadow">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 8h.01"></path>
                                <path d="M12 20h-5a3 3 0 0 1 -3 -3v-10a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v5"></path>
                                <path d="M4 15l4 -4c.928 -.893 2.072 -.893 3 0l4 4"></path>
                                <path d="M14 14l1 -1c.617 -.593 1.328 -.793 2.009 -.598"></path>
                                <path d="M19 22v-6"></path>
                                <path d="M22 19l-3 -3l-3 3"></path>
                              </svg>
                            </span>
                          </label>
                        </div>
                      </div>
                      <input id="image" type="file" class="d-none">
                    </div>

                    <div class="col px-3 pt-2 d-flex flex-column justify-content-center">
                      <div class="my-3">
                        <label class="form-label">Título <span class="form-label-description">10/35</span></label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Este es un titular de 35 caracteres">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Párrafo <span class="form-label-description">56/200</span></label>
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Escriba un pequeño resumen de la noticia"></textarea>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Texto del botón <span class="form-label-description">5/10</span></label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Ver más...">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">URL de botón</label>
                        <div class="input-group mb-2">
                          <input type="text" class="form-control" placeholder="https://ejemplo.com">
                          <a class="btn bg-transparent" target="_blank">Comprobar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-footer text-end">
                  <div class="d-flex">
                    <a href="." class="btn btn-ghost-secondary">Cancelar</a>
                    <button class="btn btn-primary ms-auto">Actualizar</button>
                  </div>
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