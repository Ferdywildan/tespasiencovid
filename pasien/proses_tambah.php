<?php

include '../koneksi.php';


if(isset($_POST['simpan']))
{
$namalengkap_pasien = $_POST['namalengkap_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$umur_pasien = $_POST['umur_pasien'];
$alamat_pasien = $_POST['alamat_pasien'];
$kecamatan_pasien = $_POST['kecamatan_pasien'];
$kelurahan_pasien = $_POST['kelurahan_pasien'];
$tgl_periksa = $_POST['tgl_periksa'];
$suhu_pasien = $_POST['suhu_pasien'];
$id_kategori = $_POST['id_kategori'];
$id_status = $_POST['id_status'];


$sql = "INSERT INTO pasien (namalengkap_pasien,nama_pasien, umur_pasien, alamat_pasien, kecamatan_pasien, kelurahan_pasien, tgl_periksa, suhu_pasien, id_kategori, id_status )
            VALUES ('$namalengkap_pasien','$nama_pasien' ,'$umur_pasien','$alamat_pasien','$kecamatan_pasien', '$kelurahan_pasien', '$tgl_periksa', '$suhu_pasien', '$id_kategori','$id_status')";

$res = mysqli_query($kon, $sql);

$count = mysqli_affected_rows($kon);
if($count == 1)
{
   header("Location: index.php");
}
else 
{
   header("Location: tambah.php");
}

if($count == 1){

}
    

else 
{
    header("Location: tambah.php");    
}
}
?>