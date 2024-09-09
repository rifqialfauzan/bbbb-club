<?php include "connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterampilan Komputer dan pengelolaan Informasi</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container styling */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: #f0f8ff;  */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun and playful font */
            color: #333;
            text-align: center;
        }

        /* Title styling */
        .container h1 {
            font-size: 2.5em;
            color: #ff4500; /* Bright coral color */
            text-align: center;
            margin-bottom: 20px;
        }

        /* Paragraphs */
        .container p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #2f4f4f; /* Darker slate gray */
            margin-bottom: 20px;
        }

        /* Responsive for mobile */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .container h1 {
                font-size: 2em;
            }

            .container p {
                font-size: 1em;
            }
        }

    </style>
</head>
<body>
<!-- Root Wrapper -->
<div class="wrapper">
    <!-- Upper Navbar  -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- Main -->
    <div class="main-content">
        <!-- Content Area -->
        <div class="content-area">
            <div class="container">
                <?php 

                $sql = "SELECT * FROM article WHERE id=6";
                $result = mysqli_query($conn, $sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row['title'];

                        echo $row['content'];
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>    
</body>
</html>