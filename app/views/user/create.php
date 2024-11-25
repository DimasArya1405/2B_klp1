<!-- app/views/user/create.php -->
<h2>Tambah Pengguna Baru</h2>
<form action="/user/store" method="POST">
    <label for="nama_sponsor">Nama Sponsor:</label>
    <input type="text" name="nama_sponsor" id="nama_sponsor" required>
    
    <label for="nilai_sponsor">Nilai Sponsor:</label>
    <input type="text" name="nilai_sponsor" id="nilai_sponsor" required>
    
    <label for="jenis_sponsor">Jenis Sponsor:</label>
    <input type="text" name="jenis_sponsor" id="jenis_sponsor" required>
    
    <button type="submit">Simpan</button>
</form>
