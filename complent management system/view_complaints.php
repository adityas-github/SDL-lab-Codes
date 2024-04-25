<?php
include 'db.php';

$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Complaints</h2>";
    echo "<table border='.1'>
          <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Category</th>
          <th>Description</th>
          <th>Status</th>
          <th>Created At</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['category']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td>".$row['created_at']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No complaints found.";
}

$conn->close();
?>
