<?php
include('koneksidb.php');
// alert("Hello World");

// function alert($msg) {
//     echo "<script type='text/javascript'>alert('$msg');</script>";
// }
$status="Selesai diperiksa";
//query update
$query = "UPDATE pendaftaran SET status='$status' WHERE id_pendaftaran='$id_pendaftaran' ";




if (mysqli_query($kon, $query)) {
    # credirect ke page index
    header("location:pemeriksaan.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>