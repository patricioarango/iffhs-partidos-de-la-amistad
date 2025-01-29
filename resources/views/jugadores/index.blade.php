<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <h1>Jugadores</h1>
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>nombre</th>
                <th>apellido</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jugadores as $key => $jugador)
                <tr>
                    <td>{{ $jugador->id  }}</td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->apellido }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

