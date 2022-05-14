@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>CREATE WARGA</h1>

        <form action="/warga/store" method="post">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">No KK</label>
                <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat"></textarea>
                <label for="floatingTextarea2">alamat</label>
            </div>


            <!-- <input type="text" name="nama" placeholder="Nama"><br>
            <input type="text" name="nik" placeholder="NIK"><br>
            <input type="text" name="no_kk" placeholder="no_kk"><br>
            <select name="jenis_kelamin" >
                <option value="">Pilih Jenis kelamin</option>
                <option value="L">laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>
            <textarea name="alamat"  rows="10"></textarea><br> -->
            <input type="submit" name="submit" value="save">
        </form>
    </div>
    
@endsection

