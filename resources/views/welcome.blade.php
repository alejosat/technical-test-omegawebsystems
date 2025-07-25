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
    <div class="container-fluid">
        <h1 class="p-3 mb-3">Listado de Usuarios</h1>
        <div class="m-3">
            <form method="POST" action="{{ route('store.data') }}">
                @csrf
                <button type="submit" class="btn btn-primary">
                    Guardar Perfiles
                </button>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-2 btn-sm">
                    {{ session('success') }}
                </div>
            @endif
        </div class="m-3">
        <div>

        </div>
        <table class="table table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataApi as $data)
                    <tr>
                        <th scope="row">{{ $data['id'] }}</th>
                        <td>{{ $data['name'] }}</td>
                        <td>
                            <img src="{{ $data['avatar'] }}" alt="Image {{ $data['name'] }}"
                                style="width: 32px; height: 32px;">
                        </td>
                        <td>{{ $data['country'] }}</td>
                        <td>
                            <a href="{{ route('edit.data', ['id' => $data['id']]) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
