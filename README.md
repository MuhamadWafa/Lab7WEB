# Praktikum 7
# Muhamad Wafa Mufida Zulfi
# 3123410334
# Pemograman Web 1
# Agung Nugroho, S.Kom., M.Kom.

### Persiapan
Install XAMPP dari https://www.apachefriends.org

Jalankan Apache dan MySQL melalui XAMPP Control Panel.

Buat folder baru bernama lab7_php_dasar di direktori:
`
C:\xampp\htdocs\
`

Buka folder tersebut di VS Code atau text editor pilihanmu.
Langkah-langkah Praktikum
### 1. Membuat File PHP Dasar
File:` php_dasar.php`
```python
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```
Hasil: Tampilkan di browser melalui URL: `php_dasar.php`
<img width="1358" height="764" alt="Cuplikan layar 2025-11-17 122631" src="https://github.com/user-attachments/assets/4a329624-6c77-4685-a0f5-a000e0955ee8" />
### 2. Menambahkan Variabel PHP
File: `http://localhost/lab7_php_dasar/php_dasar.php`
```python
<?php
$nim = "312410332";
$nama = "Zaenal Maulana Rizki";
echo "NIM: $nim <br>";
echo "Nama: $nama";
?>
```
Hasil: Tampilkan di browser melalui URL: `http://localhost/lab7_php_dasar/php_dasar.php`
<img width="1906" height="1127" alt="Cuplikan layar 2025-11-17 124347" src="https://github.com/user-attachments/assets/2e71a753-9c50-48ab-bfd5-adc10883535a" />
