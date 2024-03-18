<?php
// edit.php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "easy_ticket";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Gagal Koneksi");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tiket_konser WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);

    // Display the form for editing
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
        <!-- Add your CSS styling here -->
    </head>
    <body>
        <h2>Edit Data</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <!-- Add your form fields here, pre-filled with existing data -->
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
            <!-- Repeat similar lines for other fields -->

            <br><br>

            <input type="submit" name="update" value="Update">
        </form>
    </body>
    </html>
    <?php
} else {
    echo "Invalid ID.";
}
?>
