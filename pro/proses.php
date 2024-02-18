<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="css/styles_proses.css">
</head>
<body style="background-image: url('assets/background.jpg'); background-size: cover;">
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            $NIM    = $_POST['NIM'];
        ?>
            <h1>Selamat Datang</h1>
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td><?php echo $NIM; ?></td>
                </tr>
            </table>
            <a href="index.php" class="back-btn">Kembali</a>
        <?php } else { ?>
            <p>Mohon maaf, tidak ada data yang dikirimkan.</p>
        <?php } ?>
    </div>
</body>
</html>
