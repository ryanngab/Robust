@extends('layouts.app')
@section('content')
    <h1>Ini Halaman Category</h1>
    <div class="row">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="card shadow p-3 mb-5">
                <div class="card-header ">
                    <h2>Data Category
                    </h2>
                    <a href="{{ route('category.create') }}" class="btn btn-primary"></i> Tambah data category + </a>
                    @if (session('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="table-responsive col-lg-12">
                    {{-- <a href="{{ route ('admin.pdf')}}" class="btn btn-danger mb-3 mt-5 mb-4"> pdf </a>
                <a href="{{ route ('admin.create')}}" class="btn btn-success mb-3 mt-5 mb-4"> Excel </a> --}}
                    <table class="table table-striped table-dark table-sm table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            @foreach ($category as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="">
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success"></i>Edit</a>
                                        <form action="/category/delete/{{ $category->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" onclick="confirm('apa iyah?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
