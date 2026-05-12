@extends('layouts.app')

@section('content')
<div class="text-center mt-10">
    <h1 class="text-4xl font-bold text-blue-600">
        Bienvenido a Alebringue
    </h1>

    <p class="mt-4 text-lg">
        Mejora tu pronunciación en inglés con IA
    </p>

    <div class="mt-6">
        <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded">
            Iniciar sesión
        </a>

        <a href="/register" class="bg-green-500 text-white px-4 py-2 rounded">
            Registrarse
        </a>
    </div>
</div>
@endsection