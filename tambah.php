<!DOCTYPE html>
<html lang="en">
<head>

    <title>Pinjaman Motor</title>
</head>
<body>
    <h1>Tambah Peminjam</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_peminjam">Nama Peminjam : </label>
                <input type="text" name="nama_peminjam">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="S"></textarea>
            </p>
            <p>
                <label for="umur">Umur : </label>
                <input type="number" name="umur">
            </p>
            <p>
                <label for="keperluan">Keperluan :</label>
                <input type="text" name="keperluan">
            </p>
            <p>
                <label for="jaminan">Jaminan :</label>
                <input type="text" name="jaminan">
            </p>
            <p>
                <label for="nomor_rangka">Nomor Rangka :</label>
                <input type="number" name="nomor_rangka">
            </p>
            <p>
                <label for="merek">Merek :</label>
                <input type="text" name="merek">
            </p>
            <p>
                <label for="jenis_motor">Jenis Motor :</label>
                <input type="text" name="jenis_motor">
            </p>
            <p>
                <label for="tahun_motor">Tahun Motor :</label>
                <input type="number" name="tahun_motor">
            </p>
            <p>
                <label for="tanggal_pinjam">Tanggal Pinjam :</label>
                <input type="date" name="tanggal_pinjam">
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal Kembali :</label>
                <input type="date" name="tanggal_kembali">
            </p>

            <input type="submit" value="Tambah" name="tambah">
        </fieldset>
    </form>
    
</body>
</html>