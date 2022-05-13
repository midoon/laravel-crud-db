<h1>CREATE WARGA</h1>

<form action="/warga/store" method="post">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_kk" placeholder="no_kk"><br>
    <select name="jenis_kelamin" >
        <option value="">Pilih Jenis kelamin</option>
        <option value="L">laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat"  rows="10"></textarea><br>
    <input type="submit" name="submit" value="save">
</form>