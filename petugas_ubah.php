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
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $NamaLengkap = $_POST['NamaLengkap'];
                            $Username = $_POST['Username'];
                            $Password = md5($_POST['Password']);
                            $Email = $_POST['Email'];
                            $Alamat = $_POST['Alamat'];
                            $Role = 'Petugas';
                            $query = mysqli_query($koneksi, "UPDATE user SET NamaLengkap='$NamaLengkap', Username='$Username', Password='$Password', Email='$Email', Alamat='$Alamat', Role='$Role' WHERE UserID=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil."); location.href="?page=petugas"</script>';
                            } else {
                                '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM user WHERE UserID=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class=" form-group">
                            <label>Nama Petugas</label>
                            <input type="text" value="<?php echo $data['NamaLengkap'];?>" name="NamaLengkap"
                                class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Username</label>
                            <input type="text" value="<?php echo $data['Username'];?>" name="Username"
                                class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Password</label>
                            <input type="password" value="<?php echo $data['Password'];?>" name="Password"
                                class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email" value="<?php echo $data['Email'];?>" name="Email" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label>Alamat</label>
                            <input type="text" value="<?php echo $data['Alamat'];?>" name="Alamat" class="form-control">
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