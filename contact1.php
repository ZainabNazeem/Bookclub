<!DOCTYPE html>
<html>
<head>
    <title>City Book Club - Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
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

    <h2>Contact Us</h2>

    <form action="save.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Subject:</label><br>
        <input type="text" name="subject" required>
        <br><br>

        <label>Message:</label><br>
        <textarea name="message" rows="5" cols="30" required></textarea>
        <br><br>

        <button type="submit">Send Message</button>
    </form>

    </main>

    <footer>
        <p>&copy; 2026 City Book Club. All rights reserved.</p>
    </footer>

</body>
</html>