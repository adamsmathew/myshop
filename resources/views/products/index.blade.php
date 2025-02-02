<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css"> <!-- Add Bootstrap CSS -->
</head>
<body>
    <h1>List of Products</h1>

    @if($products->isEmpty())
        <div class="alert alert-warning">
            The list of products is empty
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->status }}</td>
                            <td>
                             <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">Show</a>
                             <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a>
                            <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}" style="display:inline;">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                             </form>
                             </td>

                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</body>
</html>
