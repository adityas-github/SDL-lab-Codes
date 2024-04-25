<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Complaint Management System</title>
</head>
<body>
    <h1>Submit a Complaint</h1>
    <form action="submit_complaint.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" required><br>
        <label>Category:</label><br>
        <input type="text" name="category" required><br>
        <label>Description:</label><br>
        <textarea name="description" required></textarea><br>
        <input type="submit" value="Submit Complaint">
    </form>
    <br>
    <a href="view_complaints.php">View All Complaints</a>
</body>
</html>
