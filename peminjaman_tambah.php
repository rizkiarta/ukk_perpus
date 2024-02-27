<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Tambah Peminjaman</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            $BukuID = $_POST['BukuID'];
                            $UserID = $_SESSION['user']['UserID'];
                            $TanggalPeminjaman = $_POST['TanggalPeminjaman'];
                            $TanggalPengembalian = $_POST['TanggalPengembalian'];
                            $StatusPeminjaman = $_POST['StatusPeminjaman'];
                            $query = mysqli_query($koneksi, "INSERT INTO Peminjaman(BukuID, UserID, TanggalPeminjaman, TanggalPengembalian, StatusPeminjaman) values('$BukuID','$UserID','$TanggalPeminjaman','$TanggalPengembalian', '$StatusPeminjaman')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=peminjaman"</script>';
                            } else {
                                '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label>Buku</label>
                            <select name="BukuID" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                <option value="<?php echo $buku['BukuID']; ?>">
                                    <?php echo $buku['Judul']; ?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="date" name="TanggalPeminjaman" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input type="date" name="TanggalPengembalian" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Status Peminjaman</label>
                            <select name="StatusPeminjaman" class="form-control">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=peminjaman" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>