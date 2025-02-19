
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$namalengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$nomortelepon = $_POST["nomor_telepon"];

echo "<h2>Data dari index.html:</h2>";
echo "Nama Lengkap: " . $namalengkap . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Email: " . $email . "<br>";
echo "Nomor Telepon: " . $nomortelepon . "<br>";
}
?>
