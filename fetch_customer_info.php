<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST["customer_id"];

    $sql = "SELECT * FROM operators WHERE mob_no = '$customer_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='ui-box'>";
            echo "<h3>Operator's Details</h3>";
            echo "<p>Mobile No: " . $row["mob_no"] . "</p>";
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Gender: " . $row["gender"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Address: " . $row["address"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
}
$conn->close();
?>
