<?php include "../connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            color: #333;
        }

        h2 {
            color: #2c3e50;
        }

        a {
            background-color: #1abc9c;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 15px;
            display: inline-block;
        }

        a:hover {
            background-color: #16a085;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td a {
            color: white;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        td a.delete {
            color: #e74c3c;
        }

        td a.delete:hover {
            text-decoration: underline;
        }

        td {
            vertical-align: top;
        }

        td:last-child {
            text-align: center;
        }



    </style>
</head>
<body>
    <h2>List Article</h2>
    <a href="add_article.php">Add New Article</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>

        <?php 
        $sql = "SELECT * FROM article ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["title"] ."</td>";
                echo "<td>". substr($row['content'], 0, 50) . "...</td>";
                echo "<td>". $row["created_at"] ."</td>";
                echo "<td>
                    <a href='update_article.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete_article.php?id=" . $row['id'] . "' onclick='return confirm(\"YAKIN HAPUS?\")'>Hapus</a> 
                    </td>";
                echo "</tr>";
            }
        }else {
            echo "<tr><td colspan='5'>No Article</td></tr>";
        }

        $conn->close();
        ?>

    </table>
</body>
</html>