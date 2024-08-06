@extends('layouts.master')

@section('content')
    <h1>Edit a Product</h1>
    <form method="POST" action="{{ route('products.update',['product' => $product->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $product->title}}" id="title" required>
        </div>

        <div class="form-row">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $product->description}}" id="description" required>
        </div>

        <div class="form-row">
            <label for="price">Price</label>
            <input class="form-control" type="number" name="price" value="{{ $product->price}}" id="price" required>
        </div>

        <div class="form-row">
            <label for="stock">Stock</label>
            <input class="form-control" type="number" name="stock" value="{{ $product->stock}}" id="stock" required>
        </div>

        <div class="form-row">
    <label for="status">Status</label>
    <select class="custom-select" name="status" id="status" required>
        <option value="" selected>Select...</option>
        <option value="available" {{ $product->status == 'available' ? 'selected' : '' }}>Available</option>
        <option value="unavailable" {{ $product->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
    </select>
</div>


        <div class="form-row">
            <button class="btn btn-primary btn-lg" type="submit">update Product</button>
        </div>
    </form>
@endsection
