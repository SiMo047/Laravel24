<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCIDENCIAS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>




<div class="relative overflow-x-auto">
<h2>INCIDENCIAS
    <a href="/incidencias/create"><button >Crear</button></a>
</h2>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Latitud
                </th>
                <th scope="col" class="px-6 py-3">
                    Longitud
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciudad
                </th>
                <th scope="col" class="px-6 py-3">
                    Direccion 
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion 
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado 
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones 
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($incidencias as $incidencia)

     

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->latitud}}
                </td>
                <td scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->longitud}}
                </td>
                <td scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->ciudad}}
                </td>
                <td scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->direccion}}
                </td>
                <td scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->descripcion}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$incidencia->estado}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="/incidencias/{{$incidencia->id}}"><i class="zmdi zmdi-airplane"></i></a>
                <a href="/incidencias/delete/{{$incidencia->id}}"><i class="zmdi zmdi-delete"></i></a>
                </td>
              
            </tr>
         
          @endforeach
            
        </tbody>
    </table>
</div>

    





</body>
</html>