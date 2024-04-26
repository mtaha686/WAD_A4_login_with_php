<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS via CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap JavaScript via CDN (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .container > a{
        float: right;
    }
</style></head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>

        <div class="container">
    <header>
        <h1>Welcome to My Homepage</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="about">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec quam non purus semper scelerisque. Duis in bibendum ligula, a consectetur ligula. Integer bibendum, libero nec varius venenatis, elit velit vehicula lectus, nec malesuada lorem turpis id orci.</p>
    </section>

    <section id="services">
        <h2>Services</h2>
        <ul>
            <li>Web Design</li>
            <li>Graphic Design</li>
            <li>SEO Optimization</li>
            <li>Social Media Management</li>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Email: info@example.com</p>
        <p>Phone: +1234567890</p>
        <p>Address: 123 Main Street, City, Country</p>
    </section>

    <footer>
        <p>&copy; 2024 My Homepage. All rights reserved.</p>
    </footer>
</div>

    </div>
</body>
</html>
