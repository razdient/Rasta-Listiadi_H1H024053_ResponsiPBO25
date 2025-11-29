<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ambil riwayat latihan (kalau belum ada, buat array kosong)
$history = $_SESSION['history'] ?? [];
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Riwayat Latihan Pokémon</title>
</head>
<body>

<h1>Riwayat Latihan Pokémon</h1>

<?php if (empty($history)): ?>
    <p>Belum ada sesi latihan yang dilakukan.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>Jenis Latihan</th>
            <th>Intensitas</th>
            <th>Level (Before → After)</th>
            <th>HP (Before → After)</th>
            <th>Waktu</th>
        </tr>

        <?php foreach ($history as $h): ?>
            <tr>
                <td><?=htmlspecialchars($h['type'])?></td>
                <td><?=$h['intensity']?></td>
                <td><?=$h['before']['level']?> → <?=$h['after']['level']?></td>
                <td><?=$h['before']['hp']?> → <?=$h['after']['hp']?></td>
                <td><?=$h['time']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<br><br>
<a href="index.php">← Kembali ke Beranda</a> |
<a href="train.php">Latihan Lagi →</a>

</body>
</html>
