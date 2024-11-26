<!-- app/views/user/create.php -->
<h2>Tambah Pengguna Baru</h2>
<form action="/user/store" method="POST">
    <label for="name">Nama Penyelenggara:</label>
    <input type="text" name="name" id="name" required>
    <label for="kontak">kontak:</label>
    <input type="kontak" name="kontak" id="kontak" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Simpan</button>
</form>
