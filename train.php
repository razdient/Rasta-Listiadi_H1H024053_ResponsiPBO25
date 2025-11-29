<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/classes/Pokemon.php';
require_once __DIR__ . '/classes/Rattata.php';

// buat objek pokemon
$pokemon = new Rattata();
$info = $pokemon->getInfo();

$result = null;
$special = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $trainingType = $_POST['training'];
    $intensity = (int)$_POST['intensity'];

    // lakukan latihan
    $result = $pokemon->train($trainingType, $intensity);
    $special = $pokemon->specialMove();

    // simpan ke riwayat
    $_SESSION['history'][] = [
        'type'      => $trainingType,
        'intensity' => $intensity,
        'before'    => $result['before'],
        'after'     => $result['after'],
        'time'      => date("Y-m-d H:i:s")
    ];
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Latihan Pokémon</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body>
<div class="container">

<h1>Latihan untuk <?=$info['name']?></h1>

<form method="POST">
    <label>Jenis Latihan:</label><br>
    <select name="training" required>
        <option value="attack">Attack</option>
        <option value="defense">Defense</option>
        <option value="speed">Speed</option>
    </select>
    <br><br>

    <label>Intensitas Latihan:</label><br>
    <input type="number" name="intensity" min="1" required>
    <br><br>

    <button type="submit">Mulai Latihan</button>
</form>

<hr>

<?php if ($result): ?>
    <h2>Hasil Latihan:</h2>
    <p><b>Level:</b> <?=$result['before']['level']?> → <?=$result['after']['level']?></p>
    <p><b>HP:</b> <?=$result['before']['hp']?> → <?=$result['after']['hp']?></p>

    <h3>Special Move:</h3>
    <p><b><?=$special['name']?></b> — <?=$special['desc']?></p>
<?php endif; ?>

<br><br>
<a href="index.php">← Kembali ke Beranda</a> | 
<a href="history.php">Riwayat Latihan →</a>

</div>
</body>
</html>

