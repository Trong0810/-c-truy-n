$conn = new mysqli("servername", "username", "password", "database");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn
$sql = "SELECT column1, column2 FROM table";
$result = $conn->query($sql);

// Hiển thị kết quả
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>" . $row["column1"]. " - " . $row["column2"]. "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();