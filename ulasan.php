<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Ulasan Buku</b></h4>
                    </div>

                    <?php
                    if($_SESSION['user']['Role']=='Peminjam'){
                    ?>

                    <div style="margin-left: 20px;">
                        <a href="?page=ulasan_tambah" class="btn btn-info">+ Tambah Data</a>
                    </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="150">User</th>
                                    <th width="350">Buku</th>
                                    <th width="350">Ulasan</th>
                                    <th width="100">Rating</th>
                                    <th width="130" class="text-center">Aksi</th>
                            </thead>
                            <tbody>
                            
                                <?php
                                $i = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku LEFT JOIN user on user.UserID = ulasanbuku.UserID LEFT JOIN buku on buku.BukuID = ulasanbuku.BukuID");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>

                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['NamaLengkap']; ?></td>
                                    <td><?php echo $data['Judul']; ?></td>
                                    <td><?php echo $data['Ulasan']; ?></td>
                                    <td><?php echo $data['Rating']; ?>/10</td>

                                    <?php
                                        if(isset($_SESSION['user'] ['Role'])) {
                                    ?>

                                    <td>
                                        <?php
                                        $user = null;
                                        if(isset($_SESSION['user'] ['UserID'])) { 
                                            $user = $_SESSION['user']['UserID'];
                                        }
                                        if($data ['UserID'] == $user) {
                                        ?>

                                        <a href="?page=ulasan_ubah&&id=<?php echo $data['UlasanID']; ?>"
                                            class="btn btn-primary">
                                            <i class="fa fa-edit icon"></i>
                                        </a>
                                        <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                                            href="?page=ulasan_hapus&&id=<?php echo $data['UlasanID']; ?>"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash icon"></i>
                                        </a>

                                        <?php
                                        } 
                                        
                                        if($_SESSION['user'] ['Role'] != 'Peminjam') {
                                        ?>

                                        <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                                            href="?page=ulasan_hapus&&id=<?php echo $data['UlasanID']; ?>"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash icon"></i>
                                        </a>

                                        <?php
                                        }
                                        ?>

                                    </td>

                                    <?php
                                        }
                                    ?>

                                </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>