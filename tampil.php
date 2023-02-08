<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    include("koneksi.php");
    ?>

    <h1>DATA PEMINJAMAN MOTOR</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Keperluan</th>
            <th>Jaminan</th>
            <th>Nomor Rangka</th>
            <th>Merek</th>
            <th>Jenis Motor</th>
            <th>Tahun Motor</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal kembali</th>
            <th>Aksi</th>
        </tr>

    <?php
    include("koneksi.php");
    $query = mysqli_query($db, "SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor=tb_motor.id_motor");

    while($data=mysqli_fetch_array($query)){
        echo"<tr>";
                echo"<td>".$data['id_peminjam']."</td>";
                echo"<td>".$data['nama_peminjam']."</td>";
                echo"<td>".$data['alamat']."</td>";
                echo"<td>".$data['umur']."</td>";
                echo"<td>".$data['keperluan']."</td>";
                echo"<td>".$data['jaminan']."</td>";
                echo"<td>".$data['nomor_rangka']."</td>";
                echo"<td>".$data['merek']."</td>";
                echo"<td>".$data['jenis_motor']."</td>";
                echo"<td>".$data['tahun_motor']."</td>";
                echo"<td>".$data['tanggal_pinjam']."</td>";
                echo"<td>".$data['tanggal_kembali']."</td>";
                echo"<td>";
                echo"<a href='edit.php?id=".$data['id_motor']."'>Edit</a> | ";
                echo"<a href='hapus.php?id=".$data['id_motor']."'>Hapus</a>";
                echo"</td>";
        echo"</tr>";
    }
    ?>
    <a href="tambah.php">Tambah</a>
    </table>
</body>
</html>