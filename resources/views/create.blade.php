@extends('layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li style="font-weight: bold">{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

    <form action="/kirim-data" method="POST">
        @csrf
        <input type="number" name="nis" placeholder="Masukan Nis">
        <input type="text" name="nama" placeholder="Masukan Nama">
        <select name="JK">
            <option value="perempuan">perempuan</option>
            <option value="laki-laki">laki-laki</option>
        </select>
        <input type="number" name="umur" placeholder="Masukan Umur">
        <button type="submit">Kirim</button>
    </form>
@endsection