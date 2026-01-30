<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "verifica";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id_alunno, nome, cognome FROM alunni";
// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_alunno"]. " - Name: " . $row["nome"]. " " . $row["cognome"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
