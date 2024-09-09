<aside id="sidebar">

    <nav class="sidebar-nav">
        <ul>
            <!-- <li><a href="index.php">Home</a></li> -->
            <!-- <li><a href="article.php">Article</a></li> -->
            

            <li class="dropD"><a href="#">Article</a>
                <ul class="sub-menu">
                    <li><a href="jellyfishing.php">Jellyfish Hunting</a></li>
                    <li><a href="krabby-patty.php">Krabby Patty</a></li>
                    <li><a href="artikel1.php">Konsep Teknologi Informasi</a></li>
                    <li><a href="artikel2.php">Keterampilan Komputer dan pengelolaan Informasi</a></li>
                    <li><a href="artikel3.php">Perangkat Keras Komputer</a></li>
                    <li><a href="artikel4.php">Sistem Operasi</a></li>
                </ul>
            </li>
            
            
            <li class="dropD"><a href="#">Login</a>
                <ul class="sub-menu">
                    
                    <?php
                        if (isset($_SESSION['login'])){
                            echo "<li><a href='logout.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='login.php'>Sign In</a></li>";
                        }
                    ?>
                </ul>
            </li>

        </ul>
    </nav>
</aside>