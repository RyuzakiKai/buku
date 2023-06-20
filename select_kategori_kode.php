<?php
include 'connection.php';

// Mendapatkan data dari request
$kode = $_GET['kode'];

// Query SQL untuk mengambil data kategori berdasarkan kode
$sql = "SELECT * FROM kategori WHERE kode='$kode'";
$result = $dbconnection->query($sql);

if ($result->num_rows > 0) {
    $category = $result->fetch_assoc();
    $response = [
        'status' => 'success',
        'data' => $category
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Data kategori tidak ditemukan.'
    ];
}

echo json_encode($response);
?>
