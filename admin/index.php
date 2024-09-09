<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../admin/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body>
    <div class="container">
        <aside id="sidebar">
            <div class="sidebar-widget">
                <!-- <button type="button" class="toggle-btn">
                    <i class="material-symbols-outlined">Menu</i>
                </button> -->
                <div class="sidebar-logo">
                    <img src="../admin/assets/bbbb-logo.png" class="sidebar-logo-img">
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="material-symbols-outlined">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="show_article.php" class="sidebar-link">
                        <i class="material-symbols-outlined">library_books</i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown">
                        <i class="material-symbols-outlined">passkey</i>
                        <span>Login</span>
                    </a>
                    <ul class="sidebar-dropdown">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="material-symbols-outlined">login</i>
                                <span>Sign In</span>
                            </a>
                            <a href="../logout.php" class="sidebar-link">
                                <i class="material-symbols-outlined">logout</i>
                                <span>Logout</span>
                            </a>
                        </li>   
                    </ul>
                </li>         
            </ul>
        </aside>
        <div class="main">
            <div class="content">
                <h1>Bikini Bottom Bad Boys!</h1>
            </div>
        </div>
    </div>

    <script src="../admin/js/script.js"></script>
</body>
</html>