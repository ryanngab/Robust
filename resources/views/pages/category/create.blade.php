@extends('layouts\app')
@section('content')

    @csrf

    <div class="mb-3">
        <label class="font-weight-bold">Nama Category</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            required value="{{ old('name') }}">
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
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
