<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Laporan Peminjaman Buku</b></h4>
                    </div>
                    <div style="margin-left: 20px;">
                        <a href="cetak.php" target="_blank" class="btn btn-info"><i class="las la-print"></i>Cetak
                            Data</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="150">User</th>
                                    <th width="250">Buku</th>
                                    <th width="190">Tanggal Peminjaman</th>
                                    <th width="200">Tanggal Pengembalian </th>
                                    <th width="170">Status Peminjaman</th>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['NamaLengkap']; ?></td>
                                    <td><?php echo $data['Judul']; ?></td>
                                    <td><?php echo $data['TanggalPeminjaman']; ?></td>
                                    <td><?php echo $data['TanggalPengembalian']; ?></td>
                                    <td><?php echo $data['StatusPeminjaman']; ?></td>
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