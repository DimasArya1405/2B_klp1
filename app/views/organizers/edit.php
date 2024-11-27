<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Organizers</title>
</head>
<body>
    <h2>Edit Organizers</h2>
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
</body>
</html>