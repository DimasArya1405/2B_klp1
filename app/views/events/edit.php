<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Acara</title>
</head>
<body>
    <h2>Edit Peserta</h2>
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

        <label for="lokasi">Lokasi<label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $user['lokasi']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="/events/index">Back to List</a>
</body>
</html>