<!-- app/views/user/create.php -->
 
<?php require_once '../public/header.php'; ?>
<div class="ml-80 py-5 px-5">
<h2 class="text-center font-bold text-xl">Tambah Peserta Baru</h2>
<form action="/attendees/store" method="POST">

    <label for="name">Nama Peserta:</label>
    <input type="text" name="nama_peserta" id="nama_peserta" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="nomor_telepon">No Telepon:</label>
    <input type="number" name="nomor_telepon" id="nomor_telepon" required>

    
    <label for="acara">Acara:</label>
    <input type="text" name="acara" id="acara" required>
    
    <button type="submit" class="p-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Simpan</button>
</form>
</div>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>