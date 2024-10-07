<?php
include "connect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$init_date = $_POST['init_date'];
$cost = $_POST['cost'];
$conn = connectDB();
try {
    $sql = "UPDATE advertisements SET title = '$title', description = '$description', init_date = '$init_date', cost = '$cost' WHERE id = $id";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $conn->query($sql);
    echo "Record updated successfully";
    // header with message
    header("Location: /");
    $conn->close();
    exit;
} catch (\Throwable $th) {
    echo "$th->getMessage()";
}

$conn->close();

?>
<br>
<br>
<button onclick="history.back()">Go Back</button>