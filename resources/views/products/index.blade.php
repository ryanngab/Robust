@extends('layouts.app')
@section('content')
    <h1>Ini Halaman Product</h1>
    <table>
        <thead>
            <th>Nama</th>
            <th>Harga</th>
            <th>Category</th>
            <th>Deskripsi</th>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        @if ($item->category)
                            {{ $item->category->name }}
                    </td>
                @else
                    eweh
            @endif
            <td>{{ $item->description }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        thead {
            background-color: #000000;
            color: #fff
        }

        table {
            border: solid;
        }

        td {
            border: solid;
        }

        td {
            border: solid;
        }

        tr {
            border: solid;
        }
    </style>
@endsection
