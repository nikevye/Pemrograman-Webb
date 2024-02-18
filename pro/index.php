<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/styles_index.css"> <!-- Memuat file CSS eksternal -->
</head>
<body style="background-image: url('assets/background.jpg'); background-size: cover;">
    <div class="form-container">
        <form action="proses.php" method="post">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="name">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email">

            <label for="NIM">NIM :</label>
            <input type="number" id="NIM" name="NIM" style="appearance: textfield;">

            <br>

            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
