<?php include "connection/config.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <?php include 'includes/header.php' ?>
</head>
<style>

    .container {
        display: flex;
        flex-direction: column;
    }

    /* .wrapper h1 {
        font-size: 40px;
        letter-spacing: 5px;
        font-family: 'Protest Guerrilla', sans-serif;
        text-align: center;
        margin-bottom: 30px;
    } */

    /* Container for the article cards */
    .article-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 20px;
        padding: 20px;
        background-color: #f7f7f7;
    }

    /* Article card */
    .article-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: calc(33.333% - 20px);
        margin-bottom: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Image section of the card */
    .article-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 3px solid #1abc9c;
    }

    /* Content section of the card */
    .article-card .content {
        padding: 20px;
    }

    .article-card .content h3 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .article-card .content p {
        font-size: 14px;
        color: #7f8c8d;
        line-height: 1.6;
    }

    /* Button */
    .article-card .content a {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 15px;
        background-color: #2c3e50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
    }

    .article-card .content a:hover {
        background-color: #365779;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .article-card {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 768px) {
        .article-card {
            width: 100%;
        }
    }

</style>
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
                <div class="article-container">
                    <?php 

                        $sql = "SELECT * FROM article ORDER BY created_at DESC";
                        $result = mysqli_query($conn, $sql);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='article-card'>";
                                    echo "<img src='' alt='card-photo'></img>";
                                    echo "<div class='content'>";
                                        echo "<h3>" . $row['title'] . "</h3>";
                                        echo "<p>" . $row['content'] . "</p>";
                                        echo "<a href='#?id=" . $row['id'] . "'>Read More</a>";
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