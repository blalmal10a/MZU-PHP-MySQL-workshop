<?php
include "connect.php";
$conn = connectDB();
try {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $init_date = $_POST["init_date"];
    $cost = $_POST["cost"];

    $sql = "INSERT INTO advertisements (title, description, init_date, cost) VALUES ('$title', '$description', '$init_date', '$cost')";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $conn->query("INSERT INTO advertisements (title, description, init_date, cost) VALUES ('$_POST[title]', '$_POST[description]', '$_POST[init_date]', '$_POST[cost]')");
    echo "New record created successfully";
    // header with message
    header("Location: /");
    exit;
} catch (\Throwable $th) {
    header("Location: create.php?message=" . $th->getMessage());
}
mysqli_close($conn);
?>
<br>
<br>
<button onclick="history.back()">Go Back</button>