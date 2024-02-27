<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Peminjaman Buku</b></h4>
                    </div>
                    <div style="margin-left: 20px;">
                        <a href="?page=peminjaman_tambah" class="btn btn-info"><i class="las la-plus"></i>Tambah
                            Peminjaman</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian </th>
                                    <th>Status Peminjaman</th>
                                    <th>Aksi</th>
                                    </theatd>
                            <tbody>
                                <?php
                                $i = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID WHERE peminjaman.UserID=". $_SESSION['user']['UserID']);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['NamaLengkap']; ?></td>
                                    <td><?php echo $data['Judul']; ?></td>
                                    <td><?php echo $data['TanggalPeminjaman']; ?></td>
                                    <td><?php echo $data['TanggalPengembalian']; ?></td>
                                    <td><?php echo $data['StatusPeminjaman']; ?></td>
                                    <td>
                                        <?php
                                        if($data['StatusPeminjaman'] != 'Dikembalikan') {  
                                        ?>
                                        <a href="?page=peminjaman_ubah&&id=<?php echo $data['PeminjamanID']; ?>"
                                            class="btn btn-primary"><i class="fa fa-edit icon"></i></a>
                                        <?php
                                        
                                        }
                                        ?>
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