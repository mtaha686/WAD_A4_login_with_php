<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
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
        <h2>User Registration</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
        <!-- Add login link -->
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <?php
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if username already exists
        $check_query = "SELECT * FROM user WHERE username='$username'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            // Username already exists, redirect to login page
            header("Location: login.php");
            exit(); // Make sure to exit after redirection
        } else {
            // Username does not exist, proceed with registration
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Registration successful!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    ?>
</body>
</html>
