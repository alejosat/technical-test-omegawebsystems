<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid m-3">
        <h1 class="p-3 mb-3">Editar Perfil</h1>
        <form action="{{ route('update.data', ['id' => $profile->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" class="form-control mb-2" name="name" id="name
                placeholder="Ingrese
                el nombre del perfil" value="{{ old('name', $profile->name) }}">
            <input type="text" class="form-control mb-2" name="avatar_url" id="avatar_url"
                placeholder="Ingrese la url del avater del perfil"
                value="{{ old('avatar_url', $profile->avatar_url) }}">
            <input type="text" class="form-control mb-2" name="country" id="country"
                placeholder="Ingrese el pais del perfil" value="{{ old('country', $profile->country) }}">
            <button type="submit" class="btn btn-warning btn-sm">
                Editar perfil
            </button>
            @if (session('success'))
                <div class="alert alert-success mt-2 btn-sm">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-success mt-2 btn-sm">
                    {{ session('error') }}
                </div>
            @endif
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>
