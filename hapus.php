<?php
include("koneksi.php");
$id= $_GET['id'];

$sql= "DELETE FROM tb_motor where id_motor='$id'";
$query = mysqli_query($db, $sql);

$sql= "DELETE FROM tb_peminjam where id_motor='$id'";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>