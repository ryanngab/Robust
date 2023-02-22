@extends('layouts\app')
@section('content')
    <div class="container-fluid">
        <h1>Dashboard</h1>
        <p>Ryan: {{ $data }}</p>
        <p>Robust: {{ $data2 }}</p>

        <table>
            <thead>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->catgory->name }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <style>
        table{
            border: solid;
        }

        td{
            border: solid;
        }

        td{
            border: solid;
        }

        tr{
            border: solid;
        }
    </style>
@endsection
