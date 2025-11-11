# Praktikum 7-PHP Dasar

### 1. PHP Dasar

```
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
### Penjelasan
- Baris 1–6: Struktur dasar HTML.
- Baris 7: Tag `<h1>` menampilkan judul halaman.
- Baris 8–10: Bagian PHP dimulai dengan `<?php` dan diakhiri `?>`.
- `echo "Hello World";` digunakan untuk menampilkan teks di browser.

Output:

### 2. Variabel PHP

```
<?php 
$nim = "312410278"; 
$nama = 'Reynaldi Nugraha Putra'; 
echo "NIM : " . $nim . "<br>"; 
echo "Nama : $nama"; 
?> 
```
### Penjelasan
- `$nim` dan `$nama` adalah variabel.
- Tanda titik (`.`) digunakan untuk menggabungkan string dan variabel.
- `<br>` menambah baris baru di HTML.

Output:

### 3. Predefined Variable `$_GET`

```
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```
### Penjelasan
- `$_GET['nama']` mengambil data dari URL.
- Contoh: `http://localhost/lab7_php_dasar/latihan2.php?nama=Reynaldi`
- maka hasilnya
img

### 4. Form Input (Metode Post)

```
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
<h2>Form Input</h2>

<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

<?php
if (isset($_POST['nama'])) {
    echo 'Selamat Datang ' . htmlspecialchars($_POST['nama']);
}
?>
</body>
</html>
```
### Penjelasan
- `method="post"`: data dikirim melalui HTTP POST.
- `isset($_POST['nama'])`: memastikan input sudah dikirim agar tidak muncul error.
- `htmlspecialchars()` mencegah script berbahaya dimasukkan ke input.
Hasil:
img

### 5. Operator Aritmatika

```
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```
