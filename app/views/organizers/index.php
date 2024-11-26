<!-- app/views/user/index.php -->
<h2>Daftar Organizers</h2>
<a href = "/organizers/create"> Tambah Organizers Baru </a>
<ul>
    <?php
    $no = 1; 
    foreach ( $users as $organizers): ?>
        <div>
            <p><?= $no; ?> - <?= htmlspecialchars($organizers['nama_penyelenggara']) ?> - <?= htmlspecialchars($organizers['kontak']) ?> - <?= htmlspecialchars($organizers['email']) ?>
            <a href="/organizers/edit/<?php echo $organizers['id_nama_penyelenggara']; ?>">Edit</a> |
            <a href="/organizers/delete/<?php echo $organizers['id_nama_penyelenggara']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
        <?php
        $no ++;
        ?>
    <?php endforeach; ?>
</ul>
