<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  @vite('resources/css/app.css')
</head>
<body class="h-[100vh]">
    <div class="flex flex-col p-4 md:max-w-2xl m-auto">
      <div class="flex justify-between">
        <h1 class="text-xl">Agregar Usuarios</h1>
        <a class="flex items-center gap-2 bg-[#004C6B] px-2 py-1 rounded-sm" href="/users">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </span>
          <h2 class="text-white">Volver al Listado</h2>
        </a>
      </div>
      <form class="flex flex-col mt-20 m-auto" action="api/register" method="POST">
          <div class="flex gap-7">
            <div class="flex flex-col gap-3 mb-8">
              <label for="name">Nombre</label>
              <input class="text-sm border-2 border-gray-400 p-2" type="text" name="name" placeholder="Ingresa el nombre" required>
            </div>
            <div class="flex flex-col gap-3 mb-8">
              <label for="name">Apellido</label>
              <input class="text-sm border-2 border-gray-400 p-2" type="text" name="surname" placeholder="Ingresa el apellido" required>
            </div>
          </div>
          <div class="flex flex-col gap-3 mb-8">
            <label for="email">E-mail</label>
            <input class="text-sm border-2 border-gray-400 p-2" type="email" name="email" placeholder="Correo electrónico" required>  
          </div>
          <div class="flex flex-col gap-3 mb-8">
            <label for="password">Contraseña</label>
            <input class="text-sm border-2 border-gray-400 p-2 w-[205px]" type="password" name="password" placeholder="Ingresa una contraseña" required>
          </div>

          <button class=" text-sm m-auto mt-4 flex items-center justify-center rounded-sm bg-[#004B6D] py-2 text-white w-52" type="submit">Guardar</button>
      </form>
    </div>
    <footer class="text-center text-sm mt-28">Alvaro Diaz - Práctica 5</footer>
</body>
</html>