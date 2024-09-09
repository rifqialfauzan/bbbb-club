<header class="top-navbar">
    <div class="sidebar-logo">
        <img src="assets/bbbb-logo.png" alt="Logo Club">
        <h1>BBBB Club</h1>
    </div>
    <nav class="top-nav"> 
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="commitment.php">Commitment</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="about_us.php">About</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="events.php">Event</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>
    <?php 
session_start();

        if (isset($_SESSION['login'])){
            echo "<div class='login-user-container'>";
                echo "<p>Hello, " . $_SESSION['login'] . "!";
            echo "</div>";
        }
    ?>
</header>