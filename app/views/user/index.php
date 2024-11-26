<!-- app/views/user/index.php -->
<h2>Daftar Peserta</h2>
<a href="/user/create">Tambah Peserta Baru</a>
<ul>
    <?php 
        $no=1;
        foreach ($attendees as $user): ?>
        <div>
            <p><?= $no; ?> - <?= htmlspecialchars($user['nama_peserta']) ?>
            - <?= htmlspecialchars($user['email']) ?> - <?= htmlspecialchars($user['nomor_telepon']) ?> 
            - <?= htmlspecialchars($user['acara']) ?>
            <a href="/user/edit/<?php echo $user['id_peserta']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id_peserta']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
        <?php
        $no++;
        ?>
    <?php endforeach; ?>
</ul>
