<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Sponsorhips</title>
</head>
<body>
    <h2>Edit Sponsorhips</h2>
    <form action="/user/update/<?php echo $user['id_sponsor']; ?>" method="POST">
        <label for="nama_sponsor">Nama Sponsor:</label>
        <input type="text" id="nama_sponsor" name="nama_sponsor" value="<?php echo $user['nama_sponsor']; ?>" required>
        <br>
        <label for="nilai_sponsor">Nilai Sponsor:</label>
        <input type="text" id="nilai_sponsor" name="nilai_sponsor" value="<?php echo $user['nilai_sponsor']; ?>" required>
        <br>
        <label for="jenis_sponsor">Jenis Sponsor:</label>
        <input type="text" id="jenis_sponsor" name="jenis_sponsor" value="<?php echo $user['jenis_sponsor']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
</body>
</html>