<?php include 'database.php';
$sql = "select nazwa_miejsca, koordynaty, zdjecie_miejsca from miejsca;";
$result = mysqli_query($conn, $sql);
$zabytki = [];

while ($row = mysqli_fetch_assoc($result)) {
    $zabytki[] = $row;
}
header('Content-Type: application/json');
echo json_encode($zabytki);
