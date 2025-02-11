<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <h1>Nuevo Jugador</h1>
        <label for="nombre">Nombre</label>

        <input
            id="nombre"
            type="text"
            name="nombre"
            class="@error('nombre') is-invalid @enderror"
        />

        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <x-primary-button></x-primary-button>
</div>
</body>
</html>

