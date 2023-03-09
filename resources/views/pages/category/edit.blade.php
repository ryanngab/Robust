@extends('layouts\app')
@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post" class="mt-5 ms-5">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $category->name }}" id="name" aria-describedby="name"
                name="name">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
    </form>
@endsection
