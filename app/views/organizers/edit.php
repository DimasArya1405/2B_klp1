<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<div class="ml-80 py-5 px-5"><div class="btn w-full mt-6">
    <a href="/attendees/create" class="flex bg-green-500 rounded-md w-72 py-2 justify-center items-center gap-1 hover:bg-green-700 transition-duration-300 ease-in-out text-white">
    <i class="bi bi-folder-plus"></i>
        Tambah Organizers Baru
</a></div> <br>
    <form action="/organizers/update/<?php echo $organizers['id_nama_penyelenggara']; ?>" method="POST">
        <label for="nama_penyelenggara">Nama Penyelenggara:</label>
        <input type="text" id="nama_penyelenggara" name="nama_penyelenggara" value="<?php echo $organizers['nama_penyelenggara']; ?>" required>
        <br>
        <label for="kontak">kontak:</label>
        <input type="text" id="kontak" name="kontak" value="<?php echo $organizers['kontak']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $organizers['email']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/organizers/index">Back to List</a>

<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>