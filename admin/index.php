<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administración | Redverdes</title>

  <link href="../src/css/login.css" rel="stylesheet">
</head>

<body class="font-futura text-palette-dark bg-gradient-to-t from-palette-primary/30 to-palette-primary/0">
  <img class="h-screen object-cover fixed -z-10 opacity-5 inset-0 m-auto lg:scale-150" src="../src/images/web/red-verdes-personas.png" alt="Logo del proyecto Redverdes">

  <div class="w-full h-screen flex flex-col justify-center items-center">
    <div class="mb-5">
      <img class="max-h-52 mx-auto mb-7 object-contain" src="../src/images/logos/redverdes-sombreado.png" alt="Logo del proyecto Redverdes">
      <h1 class="font-altair font-bold text-center text-5xl text-palette-secundary tracking-normal opacity-90">Redverdes</h1>
    </div>
    <form class="w-full max-w-md flex flex-col items-center px-7 py-10 rounded-lg bg-white/50">
      <input class="w-full bg-white text-gray-900 mt-2 py-3 px-7 rounded-full focus:outline-none focus:shadow-outline" type="text" placeholder="Usuario" />
      <input class="w-full bg-white text-gray-900 mt-2 py-3 px-7 rounded-full focus:outline-none focus:shadow-outline mb-7" type="password" placeholder="Contraseña" />
      <div class="text-center lg:text-left my-2">
        <button class="btn-solid px-6 py-2 pt-3 font-altair text-lg font-semibold rounded-full" type="submit">Ingresar</button>
      </div>
    </form>
    <p class="text-sm text-palette-secundary py-4">El acceso al sistema es para personal admnistrativo</p>
  </div>

</body>

</html>