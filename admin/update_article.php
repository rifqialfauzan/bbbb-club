<?php include "../connection/config.php"; ?>

<?php 
    
    if (isset( $_GET["id"] )) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM article WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    
    if (isset( $_POST["update"] )) {
        $title = $_POST["title"];
        $content = $_POST["content"];

        $sql = "UPDATE article SET title='$title', content='$content' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Article updated!";
            header("Location: ../admin/index.php");
        }else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Article</title>
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


        </style>
    </head>
    <body>
    <h2>Edit Article</h2>
    <form action="" method="POST"> 
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" required>
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="10" cols="30" required><?php echo $row['content']; ?></textarea>
        <input type="submit" name="update" value="update">
    </form>
    </body>
    </html>