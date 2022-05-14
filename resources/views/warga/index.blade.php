@extends('layouts.master')

@section('content')
    <div class="container">
        <a href="/warga/create" class="btn btn-primary">Add warga</a>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NIK</th>
                <th>NO.KK</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($warga as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->nik}}</td>
                    <td>{{$w->no_kk}}</td>
                    <td>{{$w->jenis_kelamin}}</td>
                    <td>{{$w->alamat}}</td>
                    <td>
                        <a href="/warga/{{$w->id}}/edit">Edit</a>
                        <form action="/warga/{{$w->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

