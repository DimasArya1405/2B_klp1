<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/user/create">Tambah Pengguna Baru</a>
<ul>
    <?php
    $no = 1; 
    foreach ($users as $user): ?>
        <div>
            <p><?= $no; ?> - <?= htmlspecialchars($user['nama_penyelenggara']) ?> - <?= htmlspecialchars($user['kontak']) ?> - <?= htmlspecialchars($user['email']) ?>
            <a href="/user/edit/<?php echo $user['id_nama_penyelenggara']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id_nama_penyelenggara']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
        <?php
        $no ++;
        ?>
    <?php endforeach; ?>
</ul>
