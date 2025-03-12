<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="stars"></div>
    <div class="container">
        <h1>To Do List</h1>
        <form action="tambah.php" method="post">
            <div class="form-group">
                <input type="time" name="time" required>
                <input type="text" name="activity" placeholder="Masukkan aktivitas" required>
                <button type="submit">Tambah</button>
            </div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Aktivitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $result = mysqli_query($koneksi, "SELECT * FROM daily_schedule ORDER BY id DESC");
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td id='time_" . $data['id'] . "'>" . $data['time'] . "</td>";
                    echo "<td id='activity_" . $data['id'] . "'>" . $data['activity'] . "</td>";
                    echo "<td class='action-links'>
                            <a href='#' onclick='toggleStrikethrough(" . $data['id'] . ")'><i class='fas fa-check-circle' style='color: green;'></i></a> 
                            <a href='hapus.php?id=" . $data['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'><i class='fas fa-trash' style='color: red;'></i></a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function toggleStrikethrough(id) {
            document.getElementById("time_" + id).classList.toggle("strikethrough");
            document.getElementById("activity_" + id).classList.toggle("strikethrough");
        }
    </script>

<footer>
    <p>Made by Kelompok  6</p>
</footer>


</body>
</html>
