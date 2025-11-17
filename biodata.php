<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
</head>
<body>
<h2>Form Biodata</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Tanggal Lahir: <input type="date" name="tgl_lahir"><br>
    Pekerjaan:
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
    </select><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $umur = date_diff(date_create($tgl), date_create('today'))->y;

    switch ($pekerjaan) {
        case 'Programmer': $gaji = 8000000; break;
        case 'Designer': $gaji = 6000000; break;
        case 'Manager': $gaji = 10000000; break;
        default: $gaji = 0; break;
    }

    echo "<h3>Hasil Output:</h3>";
    echo "Nama: $nama <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.');
}
?>
</body>
</html>