<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Daftar Petugas</b></h4>
                    </div>
                    <div style="margin-left: 20px;"><a href="?page=petugas_tambah" class="btn btn-info">+ Tambah
                            Petugas</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="200">Nama Petugas</th>
                                    <th width="200">Username</th>
                                    <th width="200">Email</th>
                                    <th width="300">ALamat</th>
                                    <th width="100">Role</th>
                                    <th width="150" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM user WHERE Role ='Petugas' ");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['NamaLengkap']; ?></td>
                                    <td><?php echo $data['Username']; ?></td>
                                    <td><?php echo $data['Email']; ?></td>
                                    <td><?php echo $data['Alamat']; ?></td>
                                    <td><?php echo $data['Role']; ?></td>
                                    <td>
                                        <a href="?page=petugas_ubah&&id=<?php echo $data['UserID'];?>"
                                            class="btn btn-primary"><i class="fa fa-edit icon"></i></a>
                                        <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                                            href="?page=petugas_hapus&&id=<?php echo $data['UserID'];?>"
                                            class="btn btn-danger"><i class="fa fa-trash icon"></i></a>
                                    </td>
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