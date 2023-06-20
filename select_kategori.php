<?php
include 'connection.php';

// Query SQL untuk mengambil semua data kategori
$sql = "SELECT * FROM kategori";
$result = $dbconnection->query($sql);

$categories = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    $response = [
        'status' => 'success',
        'data' => $categories
    ];
} else {
    $response = [
        'status' => 'success',
        'data' => []
    ];
}

echo json_encode($response);
?>
