<!-- app/views/user/create.php -->
<h2>Tambah Organizers Baru</h2>
<form action="/organizers/store" method="POST">
    <label for="nama_penyelenggara">Nama Penyelenggara:</label>
    <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" required>
    <label for="kontak">kontak:</label>
    <input type="kontak" name="kontak" id="kontak" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Simpan</button>
</form>
