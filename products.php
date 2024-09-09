<?php include "connection/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container for content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Product description and explanation text */
        .page-details p {
            margin-bottom: 20px;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        /* Products container */
        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Individual product card */
        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 20px); /* Three columns layout */
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Product image */
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Content inside each product card */
        .product-card .content {
            padding: 15px;
        }

        .product-card .content h3 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .product-card .content p {
            font-size: 14px;
            color: #7f8c8d;
            line-height: 1.5;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 1024px) {
            .product-card {
                width: calc(50% - 20px); /* Two columns layout */
            }
        }

        @media (max-width: 768px) {
            .product-card {
                width: 100%; /* Single column layout */
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
                <div class="page-details">
                    <p>
                        As an organization of course we need some money to run the organization. So in order to get money we offer some products!
                        This is our product that you can buy by contacting us! we promise we will deliver the best product for you!
                    </p>
                </div>
                <div class="products-container">
                    <?php 

                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='product-card'>";
                                    echo "<img src='assets/products/". $row['img'] ."' alt=''></img>";   
                                    echo "<div class='content'>";
                                            echo "<h3>" . $row['name'] . "</h3>";
                                            echo "<p>" . $row['description'] . "</p>";
                                        echo "</div>";
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