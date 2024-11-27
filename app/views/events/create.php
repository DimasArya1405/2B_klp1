<!-- app/views/user/create.php -->
<h2>Tambah Acara Baru</h2>
<form action="/events/store" method="POST">

    <label for="nama_acara">Nama Acara:</label>
    <input type="text" name="nama_acara" id="nama_acara" required>

    <label for="deskripsi">Deskripsi:</label>
    <input type="deskripsi" name="deskripsi" id="deskripsi" required>

    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" id="tanggal" required>

    
    <label for="lokasi">Lokasi:</label>
    <input type="text" name="lokasi" id="lokasi" required>
    
    <button type="submit">Simpan</button>
</form>