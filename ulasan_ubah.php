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
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $BukuID = $_POST['BukuID'];
                            $UserID = $_SESSION['user']['UserID'];
                            $ulasan = $_POST['ulasan'];
                            $rating = $_POST['rating'];
                            $query = mysqli_query($koneksi, "UPDATE ulasanbuku set BukuID='$BukuID', Ulasan='$ulasan', Rating='$rating' WHERE UlasanID=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Ulasan Berhasil."); location.href="?page=ulasan"</script>';
                            } else {
                                '<script>alert("Ubah Ulasan Gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku WHERE UlasanID=$id");
                        $data = mysqli_fetch_array($query);

                        // var_dump($data['Rating']);                        
                        ?>
                        <div class="form-group">
                            <label>Buku</label>

                            <select name="BukuID" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                <option <?php if ($data['BukuID'] == $buku['BukuID']) echo 'selected'; ?>
                                    value="<?php echo $buku['BukuID']; ?>">
                                    <?php echo $buku['Judul']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Ulasan</label>
                            <textarea name="ulasan" class="form-control"
                                rows="2"><?php echo $data['Ulasan']; ?></textarea>
                        </div>
                        <div class=" form-group">
                            <label>Rating</label>
                            <select name="rating" class="form-control">
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>" <?php if ($data['Rating'] == $i) echo 'selected'; ?>>
                                    <?php echo $i . "/10"; ?>
                                </option>
                                <?php
                                } ?>

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