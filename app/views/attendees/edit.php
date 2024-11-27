<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<div class="ml-80 py-5 px-5">

<div class="btn w-full mt-6">
    <a href="/attendees/create" class="flex bg-green-500 rounded-md w-72 py-2 justify-center items-center gap-1 hover:bg-green-700 transition-duration-300 ease-in-out text-white">
    <i class="bi bi-folder-plus"></i>
        Tambah Attendees Baru
</a></div> <br>
<form action="/attendees/update/<?php echo $user['id_peserta']; ?>" method="POST">
        <label for="nama_peserta">Nama Peserta:</label>
        <input type="text" id="nama_peserta" name="nama_peserta" value="<?php echo $user['nama_peserta']; ?>" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>

        <label for="nomor_telepon">No Telepon:</label>
        <input type="number" id="nomor_telepon" name="nomor_telepon" value="<?php echo $user['nomor_telepon']; ?>" required>
        <br>

        <label for="acara">Acara</label>
        <input type="text" id="acara" name="acara" value="<?php echo $user['acara']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="/attendees/index">Back to List</a>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>