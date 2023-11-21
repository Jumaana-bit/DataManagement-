// Retrieve values from URL parameters
$airline = $_GET['airline'];
$flightID = $_GET['flightID'];
$price = $_GET['price'];
$departureDate = $_GET['departure_date'];
$returnDate = $_GET['return_date'];

// Assuming you have a connection to the database
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "phase2";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database insertion
$stmt = $conn->prepare("INSERT INTO your_table_name (airline, flightID, price, departureDate, returnDate) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $airline, $flightID, $price, $departureDate, $returnDate);
$stmt->execute();
$stmt->close();

$conn->close();

