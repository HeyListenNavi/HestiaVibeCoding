<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hestia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #fdfdfc;
        }
        .primary-color {
            color: #113f67;
        }
        .primary-bg {
            background-color: #113f67;
        }
        .primary-bg:hover {
            background-color: #0d2f4d;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="text-center p-6">
        <h1 class="text-8xl font-bold primary-color mb-4 tracking-tight">Hestia</h1>
        <p class="text-2xl text-gray-600 mb-12 font-medium">Mantén privada tu privada</p>
        
        <a href="{{ url('/admin/login') }}" class="primary-bg text-white font-semibold py-4 px-10 rounded-full shadow-lg transition duration-300 text-lg">
            Iniciar Sesión
        </a>
    </div>
</body>
</html>
