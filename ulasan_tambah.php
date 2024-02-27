<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Tambah Ulasan</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            $BukuID = $_POST['BukuID'];
                            $UserID = $_SESSION['user']['UserID'];
                            $ulasan = $_POST['ulasan'];
                            $rating = $_POST['rating'];
                            $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(BukuID, UserID, ulasan, rating) values('$BukuID','$UserID','$ulasan','$rating')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=ulasan"</script>';
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
                        <div class=" form-group">
                            <label>Ulasan</label>
                            <textarea name="ulasan" class="form-control" rows="2"></textarea>
                        </div>
                        <div class=" form-group">
                            <label>Rating</label>
                            <select name="rating" class="form-control">
                                <option value="1">1/10</option>
                                <option value="2">2/10</option>
                                <option value="3">3/10</option>
                                <option value="4">4/10</option>
                                <option value="5">5/10</option>
                                <option value="6">6/10</option>
                                <option value="7">7/10</option>
                                <option value="8">8/10</option>
                                <option value="9">9/10</option>
                                <option value="10">10/10</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=ulasan" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>