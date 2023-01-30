<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destacados | Redverdes</title>

  <link href="../src/css/footprint.css" rel="stylesheet">
</head>

<body class="font-futura bg-palette-light text-palette-dark">
  <!-- Header -->
  <header class="w-full py-5 bg-palette-dark-l">
    <div class="container h-full">
      <div class="flex justify-between">
        <a class="group transition-opacity opacity-80 hover:opacity-100" title="Volver a la página principal" href="..">
          <svg class="h-7 group-hover:-translate-x-1 transition-transform fill-white stroke-white inline-block relative -top-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path>
          </svg>
          <span class="hidden lg:inline-block text-lg text-white pl-1">Página principal</span>
        </a>
        <h1 class="font-altair font-bold tracking-wide text-white text-center text-3xl">Las huellas más grandes</h1>
        <button class="group shrink-0 transition-opacity opacity-80 hover:opacity-100" title="Abrir buscador">
          <svg class="h-7 group-hover:scale-110 transition-transform fill-white stroke-white inline-block relative -top-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
          </svg>
          <span class="hidden lg:inline-block text-lg text-white pl-1">Buscar huella</span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero section -->
    <section class="w-full bg-gradient-to-t from-palette-dark-h to-palette-dark-l pt-10">
      <div class="container px-5 flex flex-col md:flex-row justify-center md:justify-between gap-x-7 gap-y-4 text-sm relative z-10">
        <div id="categories" class="w-full text-center">
          <div class="w-full flex justify-evenly bg-white/[0.03] rounded-full transition-[weight]">
            <button class="w-full py-3 px-7 rounded-full text-white text-opacity-70" title="Mostrar categoría Familiar">Familiar</button>
            <button class="w-full py-3 px-7 rounded-full text-white text-opacity-70" title="Mostrar categoría Empresarial">Empresarial</button>
            <button class="w-full py-3 px-7 rounded-full text-white text-opacity-70" title="Mostrar categoría Institucional">Institucional</button>
          </div>
        </div>
        <div id="order" class="w-full md:w-9/12 text-center" title="Ordenar por">
          <div class="w-full flex justify-evenly bg-white/[0.03] rounded-full shrink-0">
            <button class="w-full py-3 px-7 rounded-full text-white text-opacity-70" title="Ordenar por Número de huellas">Top huellas</button>
            <button class="w-full py-3 px-7 rounded-full text-white text-opacity-70" title="Ordenar por fecha">Más recientes</button>
          </div>
        </div>
      </div>

      <div class="container -mb-1 relative">
        <div class="flex justify-center gap-x-5 text-center text-white relative">
          <img class="h-full absolute inset-x-0 mx-auto -top-7 scale-125 z-0 opacity-30 select-none pointer-events-none" src="../src/images/web/brillo-top-1.png" alt="">
          <div class="order-2">
            <div class="w-fit h-fit bg-green-500/10 rounded-full p-3 mt-20 mb-3">
              <div class="w-full h-full md:w-52 md:h-52 relative">
                <img class="h-full object-contain" src="../src/images/medallas/5.png" alt="Medalla de donación de Redverdes">
                <div class="absolute h-3/5 sm:h-2/5 md:h-16  lg:h-20 -top-5 -right-3">
                  <div class="w-full h-full flex justify-center items-center relative">
                    <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                    <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                      <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                        <div class="text-center lg:text-left lg:group-hover:flex">
                          <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                          <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                            <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                            <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                          </div>
                        </div>
                        <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <b class="font-altair font-extrabold block md:text-xl leading-5 -m-2">Familia Pepito Pérez</b>
            <small class="text-gray-400">Justo ahora</small>
          </div>

          <div class="order-1 mt-20">
            <div class="w-fit h-fit bg-green-500/10 rounded-full p-3 mt-20 mb-3">
              <div class="w-full h-full md:w-40 md:h-40 relative">
                <img class="h-full object-contain" src="../src/images/medallas/5.png" alt="Medalla de donación de Redverdes">
                <div class="absolute h-3/5 sm:h-2/5 md:h-16  lg:h-20 -top-5 -right-3">
                  <div class="w-full h-full flex justify-center items-center relative">
                    <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                    <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                      <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                        <div class="text-center lg:text-left lg:group-hover:flex">
                          <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                          <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                            <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                            <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                          </div>
                        </div>
                        <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <b class="font-altair font-extrabold block md:text-xl leading-5">Familia Pepito Pérez</b>
            <small class="text-gray-400 -m-2">Justo ahora</small>
          </div>

          <div class="order-3 mt-20">
            <div class="w-fit h-fit bg-green-500/10 rounded-full p-3 mt-20 mb-3">
              <div class="w-full h-full md:w-40 md:h-40 relative">
                <img class="h-full object-contain" src="../src/images/medallas/5.png" alt="Medalla de donación de Redverdes">
                <div class="absolute h-3/5 sm:h-2/5 md:h-16  lg:h-20 -top-5 -right-3">
                  <div class="w-full h-full flex justify-center items-center relative">
                    <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                    <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                      <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                        <div class="text-center lg:text-left lg:group-hover:flex">
                          <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                          <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                            <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                            <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                          </div>
                        </div>
                        <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <b class="font-altair font-extrabold block md:text-xl leading-5">Familia Pepito Pérez</b>
            <small class="text-gray-400 -m-2">Justo ahora</small>
          </div>
        </div>

        <img class="w-10/12 md:w-7/12 mx-auto -mt-5 object-contain select-none pointer-events-none" src="../src/images/web/top-footprint.png" alt="Top de huellas">
      </div>
    </section>

    <!-- Table featured -->
    <section id="lista" class="bg-palette-dark-h">
      <div class="container pb-20">
        <div class="overflow-x-auto lg:overflow-visible relative">
          <table class="min-w-[800px] w-full mx-auto bg-white rounded-b-xl rounded-t-xl whitespace-nowrap">
            <tbody>
              <tr class="border-t first:border-none border-gray-100 hover:saturate-150 hover:scale-[1.02] transition">
                <td width="100px" class="pl-7 pr-4 py-5">
                  <div class="w-16 h-16 relative">
                    <img class="h-full object-contain" src="../src/images/medallas/1.png" alt="Medalla de donación de Redverdes">

                    <div class="absolute h-12 -top-5 -right-3">
                      <div class="w-full h-full flex justify-center items-center relative">
                        <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                        <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                          <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                            <div class="text-center lg:text-left lg:group-hover:flex">
                              <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                              <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                                <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="27%" class="px-2 py-5">
                  <b class="font-altair font-extrabold block text-xl leading-3">Familia Pepito Pérez</b>
                  <small class="t text-gray-400">Justo ahora</small>
                </td>

                <td width="27%" class="px-2 py-5">
                  <div class="flex">
                    <p class="w-52 text-palette-dark text-clip -mt-4 overflow-hidden whitespace-nowrap">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                    </p>

                    <div class="h-full ml-2 -mt-4 relative">
                      <div class="group cursor-pointer">
                        <button class="btn-link p-0 underline">...</button>
                        <div class="tooltip hidden w-[96%] lg:w-96 overflow-hidden lg:overflow-visible fixed lg:absolute inset-x-0 top-1/4 lg:left-[-185px] lg:top-7 z-30 rounded-lg mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg shadow-black/30">
                          <div class="overflow-hidden rounded-lg">
                            <div class="w-full p-3 lg:group-hover:flex">
                              <div class="text-white p-3 pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block pb-1">Familia Anónima dice:</small>
                                <p class="max-h-[150px] overflow-y-auto text-md block leading-tight">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                                </p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="15%" class="hidden lg:table-cell px-3 py-5 text-center">
                  <span class="block -mt-4">12.8kg</span>
                </td>

                <td class="pl-4 pr-7 py-5 text-center">
                  <button class="btn-solid w-full min-w-[200px] font-bold relative -mt-4 shadow-lg shadow-palette-primary/50">
                    90 Huellas
                    <img class="absolute top-0 opacity-20" src="../src/images/web/brillos-decoracion.png" alt="">
                  </button>
                </td>
              </tr>

              <tr class="border-t first:border-none border-gray-100 hover:saturate-150 hover:scale-[1.02] transition">
                <td width="100px" class="pl-7 pr-4 py-5">
                  <div class="w-16 h-16 relative">
                    <img class="h-full object-contain" src="../src/images/medallas/1.png" alt="Medalla de donación de Redverdes">

                    <div class="absolute h-12 -top-5 -right-3">
                      <div class="w-full h-full flex justify-center items-center relative">
                        <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                        <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                          <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                            <div class="text-center lg:text-left lg:group-hover:flex">
                              <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                              <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                                <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="27%" class="px-2 py-5">
                  <b class="font-altair font-extrabold block text-xl leading-3">Familia Pepito Pérez</b>
                  <small class="t text-gray-400">Justo ahora</small>
                </td>

                <td width="27%" class="px-2 py-5">
                  <div class="flex">
                    <p class="w-52 text-palette-dark text-clip -mt-4 overflow-hidden whitespace-nowrap">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                    </p>

                    <div class="h-full ml-2 -mt-4 relative">
                      <div class="group cursor-pointer">
                        <button class="btn-link p-0 underline">...</button>
                        <div class="tooltip hidden w-[96%] lg:w-96 overflow-hidden lg:overflow-visible fixed lg:absolute inset-x-0 top-1/4 lg:left-[-185px] lg:top-7 z-30 rounded-lg mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg shadow-black/30">
                          <div class="overflow-hidden rounded-lg">
                            <div class="w-full p-3 lg:group-hover:flex">
                              <div class="text-white p-3 pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block pb-1">Familia Anónima dice:</small>
                                <p class="max-h-[150px] overflow-y-auto text-md block leading-tight">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                                </p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="15%" class="hidden lg:table-cell px-3 py-5 text-center">
                  <span class="block -mt-4">12.8kg</span>
                </td>

                <td class="pl-4 pr-7 py-5 text-center">
                  <button class="btn-solid w-full min-w-[200px] font-bold relative -mt-4 shadow-lg shadow-palette-primary/50">
                    90 Huellas
                    <img class="absolute top-0 opacity-20" src="../src/images/web/brillos-decoracion.png" alt="">
                  </button>
                </td>
              </tr>

              <tr class="border-t first:border-none border-gray-100 hover:saturate-150 hover:scale-[1.02] transition">
                <td width="100px" class="pl-7 pr-4 py-5">
                  <div class="w-16 h-16 relative">
                    <img class="h-full object-contain" src="../src/images/medallas/1.png" alt="Medalla de donación de Redverdes">

                    <div class="absolute h-12 -top-5 -right-3">
                      <div class="w-full h-full flex justify-center items-center relative">
                        <img class="h-full object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                        <div class="w-4/6 h-4/6 group rounded-full absolute z-30 cursor-pointer">
                          <div class="hidden w-72 fixed lg:relative top-1/3 rounded-lg overflow-hidden inset-x-0 mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg  shadow-black/30">
                            <div class="text-center lg:text-left lg:group-hover:flex">
                              <img class="h-40 lg:h-20 lg:grow-0 mx-auto lg:ml-3 lg:mr-1 object-contain" src="../src/images/insignias/familia.png" alt="Insignia de categoría de Redverdes">
                              <div class="text-white pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block">Categoría</small>
                                <p class="text-2xl lg:text-lg block">Persona o Familiar</p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="27%" class="px-2 py-5">
                  <b class="font-altair font-extrabold block text-xl leading-3">Familia Pepito Pérez</b>
                  <small class="t text-gray-400">Justo ahora</small>
                </td>

                <td width="27%" class="px-2 py-5">
                  <div class="flex">
                    <p class="w-52 text-palette-dark text-clip -mt-4 overflow-hidden whitespace-nowrap">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                    </p>

                    <div class="h-full ml-2 -mt-4 relative">
                      <div class="group cursor-pointer">
                        <button class="btn-link p-0 underline">...</button>
                        <div class="tooltip hidden w-[96%] lg:w-96 overflow-hidden lg:overflow-visible fixed lg:absolute inset-x-0 top-1/4 lg:left-[-185px] lg:top-7 z-30 rounded-lg mx-auto group-hover:block group-focus:!block bg-palette-dark shadow-lg shadow-black/30">
                          <div class="overflow-hidden rounded-lg">
                            <div class="w-full p-3 lg:group-hover:flex">
                              <div class="text-white p-3 pb-5 lg:p-0 lg:my-auto whitespace-normal">
                                <small class="text-lg lg:text-sm opacity-50 block pb-1">Familia Anónima dice:</small>
                                <p class="max-h-[150px] overflow-y-auto text-md block leading-tight">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. non alias dicta quisquam sint quos maxime earum minima.
                                </p>
                              </div>
                            </div>
                            <img class="w-full h-2 -mb-px" src="../src/images/web/colores-decoracion.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td width="15%" class="hidden lg:table-cell px-3 py-5 text-center">
                  <span class="block -mt-4">12.8kg</span>
                </td>

                <td class="pl-4 pr-7 py-5 text-center">
                  <button class="btn-solid w-full min-w-[200px] font-bold relative -mt-4 shadow-lg shadow-palette-primary/50">
                    90 Huellas
                    <img class="absolute top-0 opacity-20" src="../src/images/web/brillos-decoracion.png" alt="">
                  </button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="py-3 text-center">
          <div class="block mt-3">
            <a href="#" class="btn-solid font-altair font-bold tracking-wider py-3 px-7 mx-auto">Mi Huella</a>
          </div>
          <a href="#" class="group -mt-9 mr-4 inline-block btn-link py-2 px-0 float-right">
            Mostrar más
            <svg class="group-hover:scale-110 duration-150 h-6 inline-block rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.36 29.36">
              <path class="fill-current" d="M14.68,29.36C6.59,29.36,0,22.78,0,14.68S6.59,0,14.68,0s14.68,6.59,14.68,14.68S22.78,29.36,14.68,29.36z
                          M14.68,1C7.14,1,1,7.14,1,14.68s6.14,13.68,13.68,13.68c7.54,0,13.68-6.14,13.68-13.68S22.23,1,14.68,1z" />
              <path class="fill-current" d="M9.98,14.09h7.35c0.24,0,0.36-0.29,0.19-0.46l-2.24-2.24c-0.23-0.23-0.23-0.6,0-0.83l0,0
                        c0.23-0.23,0.6-0.23,0.83,0l3.7,3.7c0.23,0.23,0.23,0.6,0,0.83l-3.7,3.7c-0.23,0.23-0.6,0.23-0.83,0h0c-0.23-0.23-0.23-0.6,0-0.83
                        l2.24-2.24c0.17-0.17,0.05-0.46-0.19-0.46H9.98c-0.32,0-0.59-0.26-0.59-0.59v0C9.39,14.36,9.65,14.09,9.98,14.09z" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <div class="py-12 bg-palette-dark-h"></div>

    <!-- Call to action section -->
    <section id="cta" class="px-4 -mt-32">
      <div class="container bg-palette-dark-l text-gray-50 flex flex-col items-center justify-center p-4 py-7 space-y-3 md:pt-14 md:pb-20 md:px-24 rounded-2xl overflow-hidden relative">
        <h2 class="text-3xl lg:text-4xl font-extrabold lead text-center">Únete a nuestra red de personas comprometidas con el medio ambiente</h2>
        <p class="text-lg font-semibold text-center leading-tight">Tu donación nos ayudará a cuidar nuestro planeta y a hacer una gran diferencia. Haz tu donación hoy mismo y forma parte de nuestro esfuerzo por un mundo más limpio y verde.</p>
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-8 pt-7">
          <a class="btn-solid px-8 py-3 text-lg font-semibold rounded-full" href="#">¡Me apunto!</a>
          <a class="px-8 py-3 text-lg font-normal border rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-100" href="#contacto">Más información</a>
        </div>
        <img class="w-full absolute -bottom-px object-contain" src="../src/images/web/colores-decoracion.png" alt="">
      </div>
    </section>

    <!-- Contact section -->
    <section id="contacto">
      <div class="flex justify-center items-center">
        <div class="container mx-auto py-14 flex flex-col lg:flex-row">

          <!-- Form contact -->
          <div class="w-full py-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto">
            <div class="flex">
              <h2 class="font-altair font-bold text-4xl">Envíanos un mensaje</h2>
            </div>

            <form>
              <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                <input class="w-full bg-[#EBEEF2] text-gray-900 mt-2 py-3 px-7 rounded-full focus:outline-none focus:shadow-outline" type="text" placeholder="Nombre*" />
                <input class="w-full bg-[#EBEEF2] text-gray-900 mt-2 py-3 px-7 rounded-full focus:outline-none focus:shadow-outline" type="text" placeholder="Apellido*" />
              </div>
              <input class="w-full mt-6 bg-[#EBEEF2] text-gray-900 py-3 px-7 rounded-full focus:outline-none focus:shadow-outline" type="email" placeholder="Correo electrónico*" />
              <div class="my-4">
                <textarea placeholder="Message*" class="w-full min-h-[100px] bg-[#EBEEF2] text-gray-900 mt-2 py-3 px-7 rounded-2xl focus:outline-none focus:shadow-outline"></textarea>
              </div>

              <div class="text-center lg:text-left my-2">
                <button class="btn-solid px-6 py-2 pt-3 font-altair text-lg font-semibold rounded-full" type="submit">Enviar mensaje</button>
              </div>
            </form>
          </div>

          <!-- Info contact -->
          <div class="w-full lg:w-2/6 pb-12 pt-3 ml-auto rounded-2xl">
            <div class="flex lg:flex-col justify-around relative">
              <div class="w-1/2 lg:w-full px-4">
                <h3 class="font-altair font-extrabold text-3xl my-4">Estamos disponibles</h3>
                <p class="text-sm md:text-md text-gray-500">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                </p>
              </div>

              <div class="w-1 h flex items-center pointer-events-none select-none lg:absolute -left-16">
                <img class="h-full object-contain" src="../src/images/web/separador-vertical.png" alt="">
              </div>

              <div class="pl-4 lg:mt-7">
                <h4 class="font-altair font-bold text-2xl my-4 lg:my-3">Contáctanos</h4>
                <div class="text-sm md:text-md text-gray-500">
                  <address class="not-italic">+57 123456789 <span class="hidden md:inline">-</span><br class="md:hidden"> +57 123456789</address>
                  <address class="not-italic">ejemplo@redverdes.com</address>
                  <address class="not-italic">Cll. 123 Cra. 123</address>
                  <address class="not-italic">Ipiales, Colombia.</address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-palette-dark-l/5 relative overflow-hidden">
    <?php include '../components/layout/footer.php' ?>
  </footer>

  <script>
    // Classes button active
    const twActive = ["active", "bg-palette-light", "font-bold", "!text-palette-dark-l", "!text-opacity-100"];

    // Get button filters
    const filters = {
      byCateg: document.querySelectorAll("#categories button"),
      byOrder: document.querySelectorAll("#order button")
    }

    // Change state buttons
    for (const key in filters) {
      const buttons = filters[key];
      console.log(buttons[0].classList.add(...twActive))

      buttons.forEach(btn => {
        btn.addEventListener("click", (e) => {
          const btnTarget = e.target
          const idFilter = btnTarget.parentNode.parentNode.id;

          if (btnTarget.classList.contains("active")) return false;

          // Remove active state
          const buttonActived = document.querySelector(`#${idFilter} button.active`)
          buttonActived.classList.remove.apply(buttonActived.classList, twActive)

          // Add active button target
          btnTarget.classList.add(...twActive);
        })
      });
    }
  </script>
</body>

</html>