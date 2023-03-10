@extends('layout')
@section('content')


@if (session('successAdd'))
      <h2> {{ session('succesAdd') }}</h2>
@endif
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        @foreach ($cruds as $st)
        <tr>
            {{-- <td>{{ $no++}}</td> --}}
            <td>{{ $st['nis']}}</td>
            <td>{{ $st->nama}}</td>
            <td>{{ $st['JK']}}</td>
            <td>{{ $st->umur}}</td>
            <td>
                <a href="Edit"></a> | <a href="Delete"></a>
            </td>
        </tr>
    </table>
@endforeach 
@endsection