<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_peminjam INNER JOIN tb_montor WHERE tb_peminjam.id_peminjam ='$id'";
   $query= mysqli_query($db, $sql);
   $pinjam= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
    <h1>Edit Mapel</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $pinjam['id_peminjam']?>" />
            <p>
                <label for="nama_peminjam">Nama peminjam</label>
                <input type="text" name="nama_peminjam" value="<?php echo $pinjam['nama_peminjam']?>"/>
           </p>
           <p>
           <label for="alamat">Alamat :</label>
                <input type="text" name="alamat"  value="<?php echo $pinjam['alamat']?>"/>
           </p>
           <p>
                <label for="umur">Umur</label>
                <input type="number" name="umur" value="<?php echo $pinjam['umur']?>"/>
           </p>
           <p>
                <label for="keperluan">Keperluan</label>
                <input type="text" name="keperluan" value="<?php echo $pinjam['keperluan']?>"/>
           </p>
           <p>
                <label for="jaminan">jaminan</label>
                <input type="text" name="jaminan" value="<?php echo $pinjam['jaminan']?>"/>
           </p>
           <p>
                <label for="nomor_rangka">No rangka :</label>
                <input type="number" name="nomor_rangka" value="<?php echo $pinjam['nomor_rangka']?>"/>
           </p>
           <p>
                <label for="merek">Merek</label>
                <input type="text" name="merek" value="<?php echo $pinjam['merek']?>"/>
           </p>
           <p>
                <label for="jenis_montor">Jenis montor</label>
                <input type="text" name="jenis_montor" value="<?php echo $pinjam['jenis_montor']?>"/>
           </p>
           <p>
                <label for="tahun_montor">Tahun_montor</label>
                <input type="number" name="tahun_montor" value="<?php echo $pinjam['tahun_montor']?>"/>
           </p>
           <p>
                <label for="tanggal_pinjam">Tanggal pinjam  </label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $pinjam['tanggal_pinjam']?>"/>
           </p>
           <p>
                <label for="tanggal_kembali">Tanggal kembali  </label>
                <input type="date" name="tanggal_kembali" value="<?php echo $pinjam['tanggal_kembali']?>"/>
           </p>
           <p>
           <input type="submit" value="Edit" name="edit" />
</p>
        </fieldset>
</form>
</body>
</html>