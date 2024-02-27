<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title"><b>Tambah Petugas</b></h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            $NamaLengkap = $_POST['NamaLengkap'];
                            $Username = $_POST['Username'];
                            $Password = md5( $_POST['Password']) ;
                            $Email = $_POST['Email'];
                            $Alamat = $_POST['Alamat'];
                            $Role = 'Petugas';
                            $query = mysqli_query($koneksi, "INSERT INTO user(NamaLengkap, Username, Password, Email, Alamat, Role) values('$NamaLengkap','$Username','$Password','$Email','$Alamat','$Role')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="?page=petugas"</script>';
                            } else {
                                '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        }
                        ?>
                        <div class=" form-group">
                            <label>Nama Petugas</label>
                            <input type="text" name="NamaLengkap" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Username</label>
                            <input type="text" name="Username" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Password</label>
                            <input type="password" name="Password" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Alamat</label>
                            <input type="text" name="Alamat" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=petugas" class="btn iq-bg-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>