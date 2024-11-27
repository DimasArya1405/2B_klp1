<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<div class="ml-80 py-5 px-5">

<div class="btn w-full mt-6">
    <a href="/attendees/create" class="flex bg-green-500 rounded-md w-72 py-2 justify-center items-center gap-1 hover:bg-green-700 transition-duration-300 ease-in-out text-white">
    <i class="bi bi-folder-plus"></i>
        Tambah Events Baru
</a></div> <br>
    <form action="/events/update/<?php echo $user['id_events']; ?>" method="POST">
        <label for="nama_acara">Nama Acara:</label>
        <input type="text" id="nama_acara" name="nama_acara" value="<?php echo $user['nama_acara']; ?>" required>
        <br>

        <label for="deskripsi">Deksripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $user['deskripsi']; ?>" required>
        <br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo $user['tanggal']; ?>" required>
        <br>

        <label for="lokasi">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $user['lokasi']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="/events/index">Back to List</a>

<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>