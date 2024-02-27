<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Tambah Buku</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post">
                        <?php
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $KategoriID = $_POST['KategoriID'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahunterbit = $_POST['tahunterbit'];
                            $query = mysqli_query($koneksi, "UPDATE buku SET KategoriID='$KategoriID', judul='$judul', penulis='$penulis', tahunterbit='$tahunterbit' WHERE BukuID=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil."); location.href="?page=buku"</script>';
                            } else {
                                '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE BukuID=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="KategoriID" class="form-control">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                                while ($kategori = mysqli_fetch_array($kat)) {
                                ?>
                                <option <?php if($kategori['KategoriID'] == $data['KategoriID']) echo'selected';?>
                                    value="<?php echo $kategori['KategoriID']; ?>">
                                    <?php echo $kategori['NamaKategori']; ?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Judul</label>
                            <input type="text" value="<?php echo $data['Judul'];?>" name="judul" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Penulis</label>
                            <input type="text" value="<?php echo $data['Penulis'];?>" name="penulis"
                                class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Penerbit</label>
                            <input type="text" value="<?php echo $data['Penerbit'];?>" name="penerbit"
                                class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" value="<?php echo $data['TahunTerbit'];?>" name="tahunterbit"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=buku" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>