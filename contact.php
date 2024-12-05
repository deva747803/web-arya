<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<p>Terima kasih, $name. Pesan Anda telah terkirim.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hubungi Kami</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </header>
    <main>
        <h2>Formulir Kontak</h2>
        <form action="contact.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Arya Daiva Maulana. All rights reserved.</p>
    </footer>
</body>
</html>
