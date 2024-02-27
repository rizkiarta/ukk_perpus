<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE UserID=$id");
?>
<script>
alert('Hapus Data Berhasil');
location.href = "index.php?page=petugas";
</script>