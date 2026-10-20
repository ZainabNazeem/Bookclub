<!DOCTYPE html>
<html>
<head>
    <title>City Book Club - Save</title>
    <link rel="stylesheet" href="style.css">
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
        <?php
        // 1. Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "bookclub_db");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // 2. Get the values from the form
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
        $message = mysqli_real_escape_string($conn, $_POST["message"]);

        // 3. Write the INSERT query
        $sql = "INSERT INTO messages (name, email, subject, message)
                VALUES ('$name', '$email', '$subject', '$message')";

        // 4. Run the query and show the result
        if (mysqli_query($conn, $sql)) {
            echo "<h2>Your message has been saved successfully.</h2>";
        } else {
            echo "<h2>Error: " . mysqli_error($conn) . "</h2>";
        }

        mysqli_close($conn);
        ?>

        <p><a href="messages.php">Go to Messages</a></p>
    </main>

    <footer>
        <p>&copy; 2026 City Book Club. All rights reserved.</p>
    </footer>

</body>
</html>