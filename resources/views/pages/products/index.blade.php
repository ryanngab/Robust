@extends('layouts.app')
@section('content')
    <h1>Ini Halaman Product</h1>
    <a href='/category'>Category<a>
            <div class="table-responsive">
                <table class="table border">
                    <thead class="dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Category</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($product as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('product.edit',$item->id  ) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('product.delete', $item->id )}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="confirm('apa iyah?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        @endsection
