<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT title, author, description FROM books");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Collection</title>
</head>
<body>
    <h1>Book Collection</h1>
    <a href="logout.php">Logout</a>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['author']; ?></p>
                <p><?php echo $row['description']; ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
