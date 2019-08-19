

@section("content")

@endsection
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App Crm - Home</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col col-4 border p-4 rounded-form shadow bg-white">
                <h3 class="text-center">Ingresar</h3>
                <form action="{{route("products.index")}}" method="GET">
                    <div class="form-group">
                        <label for="loginEmail">Nombre de Usuario:</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Insertar nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" placeholder="Insertar contraseña">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
