<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data Diri</title>
</head>
<body>
<h2>Form Input Data Diri</h2>
<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama"><br><br>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir"><br><br>

    <label>Pekerjaan:</label>
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Manager">Manager</option>
    </select><br><br>

    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

    switch ($pekerjaan) {
        case "Programmer": $gaji = 10000000; break;
        case "Desainer": $gaji = 8000000; break;
        case "Manager": $gaji = 12000000; break;
        default: $gaji = 0;
    }

    echo "<h3>Hasil:</h3>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: $tgl_lahir <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.');
}
?>
</body>
</html>