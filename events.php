<?php include "connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <?php include 'includes/header.php' ?>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            column-gap: 30px;
        }
        
        .events-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
        }

        .events-text {
            text-align: center;
            padding: 30px;
        }

        .events-text h1 {
            font-family: 'Protest Guerrilla', sans-serif;

        }        

        /* Client Card Styling */
        .events-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: justify;
            padding: 15px;
            transition: transform 0.3s ease-in-out;
            background-color: #f9f9f9;
        }

        /* Hover Effect on Card */
        .events-card:hover {
            transform: scale(1.05);
        }

        /* Image Styling */
        .events-card img {
            max-width: 100%;
            /* object-fit: cover; */
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Client Name Styling */
        .events-card h4 {
            font-size: 1.2em;
            color: #333;
            margin: 0;
            padding: 10px 0;
            font-family: 'Arial', sans-serif;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .events-card {
                width: 150px;
            }
        }

        @media (max-width: 480px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .events-card {
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
                <div class="events-text">
                    <h1>See our Events!</h1>
                </div>
                <div class="events-container">
                    <?php 

                    $sql = "SELECT * FROM events";
                    $result = mysqli_query($conn, $sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='events-card'>";
                                echo "<img src='assets/events/". $row['img'] ."' alt=''></img>";
                                echo "<h4>" . $row['name'] . "</h4>";   
                                echo "<p>" . $row['description'] . "</p>";
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