<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/sponsorships/create">Tambah Pengguna Baru</a>
<ul>
    <?php  
    $no = 1;
    foreach ($sponsorships as $user): ?>
        <div>
            <p><?= $no; ?> - <?= htmlspecialchars($user['nama_sponsor']) ?> - <?= htmlspecialchars($user['nilai_sponsor']) ?> - <?= htmlspecialchars($user['jenis_sponsor']) ?>
            <a href="/sponsorships/edit/<?php echo $user['id_sponsor']; ?>">Edit</a>
            <a href="/sponsorships/delete/<?php echo $user['id_sponsor']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p> 
        </div>
    <?php 
    $no ++;
    ?> 
    <?php endforeach; ?>
</ul>