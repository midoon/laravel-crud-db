<h1>EDIT WARGA</h1>

<form action="/warga/{{$warga->id}}" method="post">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$warga->nama}}"><br>
    <input type="text" name="nik" placeholder="NIK" value="{{$warga->nik}}"><br>
    <input type="text" name="no_kk" placeholder="no_kk" value="{{$warga->no_kk}}"><br>
    <select name="jenis_kelamin" >
        <option value="">Pilih Jenis kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif >laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif >Perempuan</option>
    </select><br>
    <textarea name="alamat"  rows="10" >{{$warga->alamat}}</textarea><br>
    <input type="submit" name="submit" value="save">
</form>