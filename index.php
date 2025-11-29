
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/classes/Pokemon.php';
require_once __DIR__ . '/classes/Rattata.php';

$r = new Rattata();
$info = $r->getInfo();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PokéCare - Beranda</title>
</head>
<body>
    <div class="container">

        <h1><?= htmlspecialchars($info['name']) ?></h1>

        <!-- Gambar Pokémon -->
        <img src="rattata.png" alt="Rattata" class="poke-img">

        <p>Type: <?= $info['type'] ?> | Level: <?= $info['level'] ?> | HP: <?= $info['hp'] ?></p>
        <p>Special Move: <?= $info['special'] ?></p>

        <a href="train.php">Mulai Latihan</a> |
        <a href="history.php">Riwayat Latihan</a>

    </div>
</body>
</html>

