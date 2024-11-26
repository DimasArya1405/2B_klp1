<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="/user/update/<?php echo $user['id_nama_penyelenggara']; ?>" method="POST">
        <label for="nama_penyelenggara">Nama Penyelenggara:</label>
        <input type="text" id="nama_penyelenggara" name="nama_penyelenggara" value="<?php echo $user['nama_penyelenggara']; ?>" required>
        <br>
        <label for="kontak">kontak:</label>
        <input type="text" id="kontak" name="kontak" value="<?php echo $user['kontak']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
</body>
</html>