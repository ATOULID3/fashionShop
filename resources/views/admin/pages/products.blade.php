@extends('admin.layout.app')
@section('contentt')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <a class="nav-link btn btn-success create-new-button" href="{{ route('products.create') }}">+ Create New Product</a>

                    <div class="table-responsive">
                        <table id="clientsTable"  class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> SKU </th>
                                    <th> Price </th>
                                    <th> Quantity </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="product-image" width="50">
                                    </td>
                                    <td> {{ $product->name }} </td>
                                    <td> {{ $product->sku }} </td>
                                    <td> ${{ number_format($product->price, 2) }} </td>
                                    <td> {{ $product->quantity }} </td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Succès',
                            text: '{{ session('success') }}'
                        });
                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
