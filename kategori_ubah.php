<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Ubah Kategori Buku</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post">
                        <?php
                        $id = $_GET['id'];
                        if(isset($_POST['submit'])){
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "UPDATE kategoribuku set NamaKategori='$kategori' WHERE KategoriID=$id");

                            if($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=kategori"</script>';
                            }else{
                                '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        }
                        
                        $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku where KategoriID=$id");
                        $data = mysqli_fetch_array($query);
                        
                        ?>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control"
                                value="<?php echo $data['NamaKategori'];?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=kategori" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>