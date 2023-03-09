@extends('layouts.app')
@section('content')
    <form action="{{ route('product.update', $product->id) }}" method="post" class="mt-5 ms-5">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $product->name }}" id="name" aria-describedby="name" name="name">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" value="{{ $product->price }}" id="price" aria-describedby="price" name="price">
            @error('price')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" value="{{ $product->description }}" id="description"
                aria-describedby="description" name="description">
            @error('description')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
