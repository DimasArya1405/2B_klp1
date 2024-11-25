<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Peserta</title>
</head>
<body>
    <h2>Edit Peserta</h2>
    <form action="/user/update/<?php echo $user['id_peserta']; ?>" method="POST">
        <label for="name">Nama Peserta:</label>
        <input type="text" id="name" name="name" value="<?php echo $user['nama_peserta']; ?>" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>

        <label for="nomor_telepon">No Telepon:</label>
        <input type="number" id="nomor_telepon" name="nomor_telepon" value="<?php echo $user['nomor_telepon']; ?>" required>
        <br>

        <label for="acara">Acara<label>
        <input type="text" id="acara" name="acara" value="<?php echo $user['acara']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
</body>
</html>