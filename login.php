<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <!-- Include Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 30%;
            margin: 0 auto; /* Center the container horizontally */
            padding: 20px; /* Add padding for spacing */
        }

        /* Optional: Adjust the width of form input fields */
        .container form .form-group input {
            width: 100%;
        }
    </style></head>
<body>
    <div class="container">
        <h2>User Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
        <!-- Add registration link -->
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
    <?php
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: home.php");
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>
</body>
</html>
