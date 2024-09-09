<?php include "../connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            color: #333;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #34495e;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #1abc9c;
            outline: none;
        }

        input[type="submit"] {
            background-color: #1abc9c;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #16a085;
        }

        /* Styling untuk pesan sukses dan error */
        .success-message {
            color: #27ae60;
            background-color: #ecf9f1;
            padding: 10px;
            border: 1px solid #2ecc71;
            margin-top: 20px;
            border-radius: 5px;
        }

        .error-message {
            color: #e74c3c;
            background-color: #f9ecec;
            padding: 10px;
            border: 1px solid #e74c3c;
            margin-top: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    
    <h2>Add Article</h2>
    <a href="admin/index.php">Back to article list</a>
    <form action="" method="POST"> 
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="10" cols="30" required></textarea>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php 
    
    if (isset( $_POST["submit"] )) {
        $title = $_POST["title"];
        $content = $_POST["content"];

        $sql = "INSERT INTO article(title,content) VALUES('$title','$content')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='success-message'>Article created!</div>";
        }else {
            echo "<div class='error-message'>Error" . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    $conn->close();
    ?>
</body>
</html>