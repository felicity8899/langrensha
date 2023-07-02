<?php
$servername = "localhost";
$username = "inspire_tech_onl";
$password = "8cpeDF5ZYn";
$dbname = "inspire_tech_onl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$sql = "SELECT * FROM game_version";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "No data found";
}

$conn->close();
?>
