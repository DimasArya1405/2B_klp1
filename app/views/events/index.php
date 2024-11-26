<!-- app/views/user/index.php -->
<h2>Daftar Acara</h2>
<a href="/events/create">Tambah Acara Baru</a>
<ul>

    <?php 
    $no=1;
    foreach ($users as $events): ?>
        <div>
            <p><?= $no; ?> - <?= htmlspecialchars($events['nama_acara']) ?>
            - <?= htmlspecialchars($events['deskripsi']) ?> - <?= htmlspecialchars($events['tanggal']) ?> 
            - <?= htmlspecialchars($events['lokasi']) ?>
            <a href="/events/edit/<?php echo $events['id_events']; ?>">Edit</a> |
            <a href="/events/delete/<?php echo $events['id_events']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php 
    $no++;
    endforeach; ?>
</ul>
