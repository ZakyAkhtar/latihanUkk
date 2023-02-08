<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $Nama=$_POST['nama_peminjam'];
    $Alamat=$_POST['alamat'];
    $Umur=$_POST['umur'];
    $Keperluan=$_POST['keperluan'];
    $Jaminan=$_POST['jaminan'];
    $Nomor_Rangka=$_POST['nomor_rangka'];
    $Merek=$_POST['merek'];
    $Jenis_Montor=$_POST['jenis_montor'];
    $Tahun_Montor=$_POST['tahun_montor'];
    $Tanggal_Pinjam=$_POST['tanggal_pinjam'];
    $Tanggal_Kembali=$_POST['tanggal_kembali'];
    $id=$_POST['id'];

    $sql = "UPDATE tb_peminjam SET nama_peminjam='$Nama', alamat='$Alamat', umur='$Umur',
     keperluan='$Keperluan', jaminan='$Jaminan' WHERE id_peminjam='$id'";
    
    $query= mysqli_query($db,$sql);

    $sql = "UPDATE tb_montor SET nomor_rangka='$Nomor_Rangka', merek='$Merek', jenis_montor='$Jenis_Montor', 
    tahun_montor='$Tahun_Montor', tanggal_pinjam='$Tanggal_Pinjam', tanggal_kembali='$Tanggal_Kembali' WHERE id_motor1='$id'";
   
   $query= mysqli_query($db,$sql);

if($query){
    header('location:tampil.php');
}else{
    die ("gagal mengedit");
}}
?>