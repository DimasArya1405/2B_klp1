<!-- app/views/user/create.php -->
<h2>Tambah Peserta Baru</h2>
<form action="/attendees/store" method="POST">

    <label for="name">Nama Peserta:</label>
    <input type="text" name="nama_peserta" id="nama_peserta" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="nomor_telepon">No Telepon:</label>
    <input type="number" name="nomor_telepon" id="nomor_telepon" required>

    
    <label for="acara">Acara:</label>
    <input type="text" name="acara" id="acara" required>
    
    <button type="submit">Simpan</button>
</form>
