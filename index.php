<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZU WORKSHOP on PHP & MySQL</title>
    <link rel="stylesheet" href="pico.min.css">
</head>

<body style="padding: 20px;">
    <?php
    include "controllers/connect.php";

    $conn = connectDB();

    $sql = "select * from advertisements";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . "<br>";
            echo "title: " . $row["title"] . "<br>";
            echo "description: " . $row["description"] . "<br>";
            echo "init_date: " . $row["init_date"] . "<br>";
            echo "cost: " . $row["cost"] . "<br>";
            $detail = "id=" . $row["id"] . "&title=" . $row["title"] . "&description=" . $row["description"] . "&init_date=" . $row["init_date"] . "&cost=" . $row["cost"];
            echo "<a href='/edit?" . $detail . "'><button> edit</button></a>";
            echo "<form style='display:inline' action='controllers/delete.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<button> delete</button>";
            echo "</form>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    }
    $amount = $conn->query('select sum(cost) from advertisements');
    echo "Total cost: " . $amount->fetch_assoc()["sum(cost)"];
    mysqli_close($conn);
    ?>
    <br>
    <br>
    <div style="position: fixed; bottom: 0; right:0; padding-top: 10px; padding-left: 10px; padding-right: 10px; background: grey; width: 100%">
        <a href="/create">
            <button>Add</button>
        </a>
    </div>
</body>

</html>