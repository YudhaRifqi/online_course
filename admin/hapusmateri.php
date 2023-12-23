<?php
include '../koneksi.php';

$id = $_GET["id"];



$query = "DELETE FROM materi WHERE id = $id";
$delete = mysqli_query($conn, $query);

if ($delete) {
    echo "<script>
                alert ('Data Berhasil Dihapus')
                document.location.href = 'materi.php';
                </script>";
}
