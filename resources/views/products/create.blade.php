@extends('layouts.master')

@section('content')
    <h1>Create a Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="form-row">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" required>
        </div>

        <div class="form-row">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description" required>
        </div>

        <div class="form-row">
            <label for="price">Price</label>
            <input class="form-control" type="number" name="price" id="price" required>
        </div>

        <div class="form-row">
            <label for="stock">Stock</label>
            <input class="form-control" type="number" name="stock" id="stock" required>
        </div>

        <div class="form-row">
            <label for="status">Status</label>
            <select class="custom-select" name="status" id="status" required>
                <option value="" selected>Select...</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button class="btn btn-primary btn-lg" type="submit">Create Product</button>
        </div>
    </form>
@endsection
