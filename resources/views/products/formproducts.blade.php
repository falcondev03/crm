@extends("layout.app")

@section("title", "Agregar nuevo producto")

@section("content")
    <div class="row justify-content-center">
        <div class="col col-8 border shadow p-3 mb-5 mt-3 bg-white rounded-form">
            <h3 class="text-center">Agregar Producto</h3>
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{route("products.store")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="code_product">Codigo de Producto:</label>
                    <input type="text" name="code_product" class="form-control @error("code_product") is-invalid @enderror" id="code_product" placeholder="Insertar codigo de producto">
                </div>
                    @error('code_product')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-group">
                    <label for="name_product">Nombre del producto:</label>
                    <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" id="name_product" placeholder="Nombre del producto">
                </div>
                @error("name")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="description">Descripcion:</label>
                    <textarea class="form-control @error("description") is-invalid @enderror" name="description" id="description" rows="3" placeholder="Escribe una descripcion del producto"></textarea>
                </div>
                @error("description")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="provider">Proveedor:</label>
                    <input type="text" name="provider" class="form-control @error("provider") is-invalid @enderror" id="provider" placeholder="Nombre del proveedor">
                </div>
                @error("provider")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="quantity">Cantidad:</label>
                    <input type="number" name="quantity" class="form-control @error("quantity") is-invalid @enderror" id="quantity" placeholder="Ingrese las existencias">
                </div>
                @error("quantity")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="price">Precio:</label>
                    <input type="number" name="price" class="form-control @error("price") is-invalid @enderror" id="price" placeholder="Inserte el precio">
                </div>
                @error("price")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="expiration">Expiracion:</label>
                    <input type="date" name="expiration" class="form-control @error("expiration") is-invalid @enderror" id="expiration">
                </div>
                @error("expiration")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="flex-row text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
