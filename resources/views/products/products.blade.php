@extends("layout.app")

@section("title", "Lista de Productos")

@section("content")
    <div class="row mt-4">
        <div class="col col-12">
            <h3 class="text-center mb-4">Inventario</h3>
            <table id="products" class="table table-hover table-condensed table-bordered ">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Proveedor</th>
                        <th>Existencias</th>
                        <th>Precio</th>
                        <th>Expiracion</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr class="text-center">
                            <td>{{$product->code_product}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->provider}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->expiration}}</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="material-icons icon-small">visibility</i></button>
                                <button class="btn btn-success btn-sm"><i class="material-icons icon-small">edit</i></button>
                                <button class="btn btn-outline-danger btn-sm"><i class="material-icons icon-small">delete</i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
