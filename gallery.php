<?php include "connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container Styling */
        .container {
            display: flex;
            flex-direction: column;
            column-gap: 30px;
        }
        
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
        }

        .gallery-title {
            text-align: center;
            padding: 30px;
        }

        .gallery-title h1 {
            font-family: 'Protest Guerrilla', sans-serif;

        }

        /* Client Card Styling */
        /* .gallery-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            padding: 15px;
            transition: transform 0.3s ease-in-out;
            background-color: #f9f9f9;
        } */

        /* Hover Effect on Card */
        .gallery-card:hover {
            transform: scale(1.05);
        }

        /* Image Styling */
        .gallery-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery-card {
                width: 150px;
            }
        }

        @media (max-width: 480px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .gallery-card {
                width: 100%;
                max-width: 350px;
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
                <div class="gallery-title">
                    <h1>See Our Moments!</h1>
                </div>
                <div class="gallery-container">
                    <?php 

                    $sql = "SELECT * FROM gallery";
                    $result = mysqli_query($conn, $sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='gallery-card'>";
                                echo "<img src='assets/gallery/". $row['img'] ."' alt=''></img>";   
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>    
</body>
</html>