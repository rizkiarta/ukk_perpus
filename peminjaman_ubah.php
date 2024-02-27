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
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $BukuID = $_POST['BukuID'];
                            $UserID = $_SESSION['user']['UserID'];
                            $TanggalPeminjaman = $_POST['TanggalPeminjaman'];
                            $TanggalPengembalian = $_POST['TanggalPengembalian'];
                            $StatusPeminjaman = $_POST['StatusPeminjaman'];
                            $query = mysqli_query($koneksi, "UPDATE peminjaman SET BukuID='$BukuID', UserID='$UserID', TanggalPeminjaman='$TanggalPeminjaman', TanggalPengembalian='$TanggalPengembalian',StatusPeminjaman='$StatusPeminjaman' WHERE PeminjamanID=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil."); location.href="?page=peminjaman"</script>';
                            } else {
                                '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE PeminjamanID=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group">
                            <label>Buku</label>
                            <select name="BukuID" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                <option <?php if($buku['BukuID'] == $data['BukuID']) echo'selected';?>
                                    value="<?php echo $buku['BukuID']; ?>">
                                    <?php echo $buku['Judul']; ?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input value="<?php echo $data['TanggalPeminjaman'];?>" type="date" name="TanggalPeminjaman"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input value="<?php echo $data['TanggalPengembalian'];?>" type="date"
                                name="TanggalPengembalian" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status Peminjaman</label>
                            <select name="StatusPeminjaman" class="form-control">
                                <option <?php if($data['StatusPeminjaman'] == 'dipinjam') echo'selected';?>
                                    value="dipinjam">
                                    Dipinjam</option>
                                <option <?php if($data['StatusPeminjaman'] == 'dikembalikan') echo'selected';?>
                                    value="dikembalikan">Dikembalikan</option>
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