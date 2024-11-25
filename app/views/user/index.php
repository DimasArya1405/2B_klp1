<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/user/create">Tambah Peserta Baru</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['id_peserta']) ?> - <?= htmlspecialchars($user['nama_peserta']) ?>
            - <?= htmlspecialchars($user['email']) ?> - <?= htmlspecialchars($user['nomor_telepon']) ?> 
            - <?= htmlspecialchars($user['acara']) ?>
            <a href="/user/edit/<?php echo $user['id_peserta']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id_peserta']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
