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
                        if (isset($_POST['submit'])) {
                            $KategoriID = $_POST['KategoriID'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahunterbit = $_POST['tahunterbit'];
                            $query = mysqli_query($koneksi, "INSERT INTO buku(KategoriID, Judul, Penulis, Penerbit, tahunterbit) values('$KategoriID','$judul','$penulis','$penerbit','$tahunterbit')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=buku"</script>';
                            } else {
                                '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="KategoriID" class="form-control">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                                while($kategori = mysqli_fetch_array($kat)){
                                    ?>
                                <option value="<?php echo $kategori['KategoriID'];?>">
                                    <?php echo $kategori['NamaKategori'];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Penerbit</label>
                            <input type="text" name="penerbit" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahunterbit" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=produk" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>