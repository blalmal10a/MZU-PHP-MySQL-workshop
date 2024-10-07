<?php
include "connect.php";
$conn = connectDB();
try {
    $id = $_POST["id"];
    $sql = "DELETE FROM advertisements WHERE id = $id";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $conn->query($sql);
    echo "Record deleted successfully";
    // header with message
    header("Location: /");
    exit;
} catch (\Throwable $th) {
    header("Location: /?err-message=" . $th->getMessage());
}
mysqli_close($conn);
?>
<br>