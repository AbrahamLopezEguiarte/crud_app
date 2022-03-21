<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Productos en inventario</title>
</head>
<body class="mx-5 my-3">
    <h1 class="text-center mt-2" style="font-size: 60px">Show</h1>
    <a href="{{route('productos.index')}}" class="badge badge-pill badge-light mb-2">Volver a la página principal</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoría</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{$producto -> id}}</th>
            <td>{{$producto -> name}}</td>
            <td>{{$producto -> description}}</td>
            <td>${{$producto -> price}}</td>
            <td>{{$producto -> category}}</td>
            <td style="width: 8%" >
                <img class="img-thumbnail rounded"  src="{{$producto -> image}}" alt="">
            </td>
            <td>
                <a href="{{route('productos.edit', $producto->id)}}" class="mx-3">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <form action="{{route('productos.destroy', $producto)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="mx-3">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
            </tr>
        </tbody>
        </table>
    
</body>
</html>