<?php
include 'koneksi.php';


if (isset($_POST['btnProses'])) {
    $nama = $_POST['nama'];
    $rekomendasi = $_POST['rekomendasi'];
    $sosial = $_POST['sosial'];
    
    if ($_POST['btnProses'] == "tambah") {
        $query="INSERT INTO recomended VALUES ('$nama','$rekomendasi','$sosial','')";
        $sql=mysqli_query($konek,$query);
        if ($sql) {
            header('location:index.php');
            
        }
    }

    if( mysqli_affected_rows($konek) >= 0){
        echo"
            <script>
                alert('Recomendation added successfully!');
                window.location.href = 'index.php';
            </script>
        ";
    };
    
}

if (isset($_POST['btnUpdate'])) {
    $nama = $_POST['nama'];
    $rekomendasi = $_POST['rekomendasi'];
    $sosial = $_POST['sosial'];
    $id = $_POST['id'];

    $query = "UPDATE recomended
            SET 
            nama = '$nama',
            rekomendasi = '$rekomendasi',
            sosial = '$sosial'
            WHERE id = $id;
    ";
    
    mysqli_query($konek, $query);

    if( mysqli_affected_rows($konek) >= 0){
        echo"
            <script>
                alert('Recomendation updated successfuly!');
                window.location.href = 'index.php';
            </script>
        ";
    };

}

// fungsi mengambil data dari databases
function query($sql)
{
    global $konek;

    $hasil = mysqli_query($konek, $sql);

    $rows = [];
    while ($data = mysqli_fetch_assoc($hasil)) {
        $rows[] = $data;
    }

    return $rows;
}
?>