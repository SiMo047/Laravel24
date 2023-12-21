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

<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Latitud_{{$incidencia->latitud}} - Longitud_{{$incidencia->longitud}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ciudad :{{$incidencia->ciudad}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Dirreccion :{{$incidencia->direccion}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descripcion :{{$incidencia->descripcion}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Estado :{{$incidencia->estado}}</p>
     

    </div>
</a>


</body>