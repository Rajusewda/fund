<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <h4>It will take just a minute for sign up</h4>

        <?php
        // Database configuration
        $servername = "localhost";
        $username = "Suraj@gmail.com";
        $password = "suraj123";
        $dbname = "nsp";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create table if it does not exist
        $sql = "CREATE TABLE IF NOT EXISTS Users_Reg (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) !== TRUE) {
            echo "Error creating table: " . $conn->error;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            // Basic validation
            $errors = [];

            if (empty($firstName)) {
                $errors[] = "First name is required";
            }

            if (empty($lastName)) {
                $errors[] = "Last name is required";
            }

            if (empty($email)) {
                $errors[] = "Email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }

            if (empty($password)) {
                $errors[] = "Password is required";
            }

            if ($password !== $confirmPassword) {
                $errors[] = "Passwords do not match";
            }

            if (empty($errors)) {
                // Hash the password before saving it to the database
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert data into the database
                $stmt = $conn->prepare("INSERT INTO Users_Reg (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

                if ($stmt->execute()) {
                    echo "<p>Registration successful!</p>";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul>";
            }
        }

        $conn->close();
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" value="<?php echo isset($firstName) ? htmlspecialchars($firstName) : ''; ?>">

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" value="<?php echo isset($lastName) ? htmlspecialchars($lastName) : ''; ?>">

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">

            <input type="submit" value="Sign Up">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
