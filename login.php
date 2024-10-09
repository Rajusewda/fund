<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="lg">
        <h2>Login</h2>
        <?php
        // Initialize variables to store error messages or success messages
        $error = "";
        $success = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capture form inputs
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Basic validation
            if (empty($email) || empty($password)) {
                $error = "Both fields are required.";
            } else {
                // Example: checking against hardcoded values for demonstration
                // Replace this with actual database checking logic
                if ($email == "Suraj@gmail.com" && $password == "suraj123") {
                    $success = "Login successful!";
                } else {
                    $error = "Invalid email or password.";
                }
            }
        }
        ?>

        <!-- Display error or success messages -->
        <?php if ($error): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php elseif ($success): ?>
            <p style="color:green;"><?php echo $success; ?></p>
        <?php endif; ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <input type="submit" value="Login">
            <p>Not have an account? <a href="Registration.php">Sign Up here</a></p>
        </form>
    </div>
</body>
</html>
