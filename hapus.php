<?php 

include 'koneksi.php';

$id = $_GET['id'];

// function hapus data
function hapus() {
    global $konek;
    global $id;
    mysqli_query($konek, "DELETE FROM recomended WHERE id=$id;");

    return mysqli_affected_rows($konek);
}

if (hapus() > 0) {
    echo "
        <script>
            alert('Data berhasil di hapus');
            document.location.href = 'index.php'
        </script>
    ";
} else {

    echo "
        <script>
            alert('data gagal di hapus');
        </script>
    ";
}


?>