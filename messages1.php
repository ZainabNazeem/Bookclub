<!DOCTYPE html>
<html>
<head>
    <title>City Book Club - Messages</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="messages.css">
</head>
<body>

    <header>
        <h1>City Book Club</h1>
    </header>

    <nav>
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact</a> |
        <a href="messages.php">Messages</a>
    </nav>

    <main>
        <h2>Received Messages</h2>

        <?php
        // 1. Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "bookclub_db");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // 2. Get all messages, newest first
        $sql = "SELECT * FROM messages ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sent At</th>
            </tr>

            <?php
            // 3. Show each record as a table row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["subject"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["message"]) . "</td>";
                echo "<td>" . $row["sent_at"] . "</td>";
                echo "</tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
    </main>

    <footer>
        <p>&copy; 2026 City Book Club. All rights reserved.</p>
    </footer>

</body>
</html>