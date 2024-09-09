<?php include "connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container Styling */
        .container {
            display: flex;
            flex-direction: column;
            column-gap: 30px;
        }
        
        .client-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;

            border-radius: 10px;
        }

        .client-text {
            text-align: center;
            padding: 30px;
        }

        .client-text h1 {
            font-family: 'Protest Guerrilla', sans-serif;

        }

        /* Client Card Styling */
        .client-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            padding: 15px;
            transition: transform 0.3s ease-in-out;
            background-color: #f9f9f9;
        }

        /* Hover Effect on Card */
        .client-card:hover {
            transform: scale(1.05);
        }

        /* Image Styling */
        .client-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Client Name Styling */
        .client-card h4 {
            font-size: 1.2em;
            color: #333;
            margin: 0;
            padding: 10px 0;
            font-family: 'Arial', sans-serif;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .client-card {
                width: 150px;
            }
        }

        @media (max-width: 480px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .client-card {
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
                <div class="client-text">
                    <h1>Meet our Clients!</h1>
                </div>
                <div class="client-container">
                    <?php 

                    $sql = "SELECT * FROM clients";
                    $result = mysqli_query($conn, $sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='client-card'>";
                                echo "<img src='assets/clients/". $row['logo'] ."' alt=''></img>";
                                echo "<h4>" . $row['name'] . "</h4>";   
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