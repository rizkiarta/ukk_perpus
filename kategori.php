<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex ">
                    <div class=" iq-header-title">
                        <h4 class="card-title"><b>Kategori Buku</b></h4>
                    </div>
                    <div style="margin-left: 20px;"><a href="?page=kategori_tambah" class="btn btn-info">+ Tambah
                            Data</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Kategori</th>
                                    <th width="130" class="text-center">Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                            $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                                            while($data = mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['NamaKategori']; ?></td>
                                    <td>
                                        <a href="?page=kategori_ubah&&id=<?php echo $data['KategoriID'];?>"
                                            class="btn btn-primary"><i class="fa fa-edit icon"></i></a>
                                        <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"
                                            href="?page=kategori_hapus&&id=<?php echo $data['KategoriID'];?>"
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