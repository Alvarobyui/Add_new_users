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
        <h1 class="text-xl">Gestión de Usuarios</h1>
        <a class="flex items-center gap-2 bg-[#004C6B] px-2 py-1 rounded-sm" href="/form">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-add" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
              <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
            </svg>
          </span>
          <h2 class="text-white">Agregar</h2>
        </a>
      </div>
      <div class="mt-16 w-full">
        <table class="w-full">
          <thead class="border-b-2">
              <tr class="flex gap-44">
                  <th class="w-1/4 text-start">Id</th>
                  <th class="w-1/2 text-start">Nombre</th>
                  <th class="w-1/4 text-start">E-mail</th>
              </tr>
          </thead>
          <tbody>
            @if($users->isEmpty())
                <tr>
                    <td colspan="3" class="text-center">No hay registros</td>
                </tr>
            @else
                @foreach ($users as $user)
                    <tr class="flex gap-44">
                        <td class="w-1/4">{{ $user->id }}</td>
                        <td class="w-1/2">{{ $user->name }} {{ $user->surname }}</td>
                        <td class="w-1/4">{{ $user->email }}</td>
                    </tr>
                @endforeach
            @endif
          </tbody>        
        </table>
      </div>    
    </div>
    <footer class="text-center text-sm mt-28">Alvaro Diaz - Práctica 5 </footer>
</body>
</html>