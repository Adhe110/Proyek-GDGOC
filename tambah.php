<?php
include 'koneksi.php';

$time = isset($_POST['time']) ? trim($_POST['time']) : null;
$activity = isset($_POST['activity']) ? trim($_POST['activity']) : null;
$message = '';

if (!$time || !$activity) {
    $message = "<div class='message error'>❌ Data gagal ditambahkan! Pastikan semua field diisi.</div>";
} elseif (is_numeric($activity)) {
    $message = "<div class='message error'>❌ Data gagal ditambahkan! Aktivitas harus berupa teks, bukan angka.</div>";
} else {
    $time = mysqli_real_escape_string($koneksi, $time);
    $activity = mysqli_real_escape_string($koneksi, $activity);

    $query = "INSERT INTO daily_schedule (time, activity) VALUES ('$time', '$activity')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $message = "<div class='message success'>✅ Data berhasil ditambahkan!</div>";
    } else {
        $message = "<div class='message error'>❌ Data gagal ditambahkan! Error: " . mysqli_error($koneksi) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List - Tambah</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg,rgb(17, 24, 44),rgb(25, 11, 38));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .message {
            font-size: 18px;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .success {
            background: rgba(76, 175, 80, 0.7);
        }
        .error {
            background: rgba(244, 67, 54, 0.7);
        }
        .btn {
            display: inline-block;
            background: white;
            color: #764ba2;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn:hover {
            background: #764ba2;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php echo $message; ?>
        <a href="index.php" class="btn">Kembali ke To-Do List</a>
    </div>
</body>
</html>
