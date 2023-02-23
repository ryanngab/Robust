@extends('layouts.app')
@section('content')
    <h1>Ini Halaman Product</h1>
    <table>
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
