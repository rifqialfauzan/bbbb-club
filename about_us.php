<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include 'includes/header.php' ?>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .container .text-content {
            text-align: justify;
            max-width: 500px;
            /* margin-right: 300px; */
        }
        .container .text-content h2{
            font-family: 'Protest Guerrilla', sans-serif;
        }
        .container .text-content p {
            font-size: 20px;
            color: #2f4f4f; /* Darker slate gray for text */

        }
        .container .text-content p span{
            font-weight: bolder;
        }
        .container .img-content img {
            width: 350px;
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
                <div class="text-content">
                    <h2>Hello, friends!</h2>
                    <p>We are a good good and sane science club called <span>Bikini Bottom Bad Boys</span>. Even if there is a 'bad boys' in our name, we are not! That is just for gimmick.
                        Our main basis is in Bikini Bottom. If you visit Bikini Bottom, you can search for us! we will welcome you! we love everyone. If you wonder
                        what are we doing in this club, we have several activity that we do regularly and that is absolutely fun! We ride around Bikini Bottom and researching the wave in the city along the way, helping
                        Bikini Bottom citizen, we have Jellyfishing activity to research about jellyfish every Weekend!!! and there is much more activity that we do. So if you consider to join and have fun
                        with us or just want to ask us about anything, you can go to 'contact' section and reach us anytime!
                    </p>
                </div>
                <div class="img-content">
                    <img src="assets/bbbb3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>    
</body>
</html>