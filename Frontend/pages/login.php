<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'] ?? null; // Get role if set

    // Here, you can customize the login logic based on role
    if ($role == 'admin' && $email == 'admin@example.com' && $password == 'adminpassword') {
        echo "Admin login successful!";
    } elseif ($role == 'clinic_staff' && $email == 'staff@example.com' && $password == 'staffpassword') {
        echo "Clinic staff login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="../assets/logo12.jpg" alt="Logo" class="logo">
            <h1>Brgy. Clinic</h1>
        </div>
    </header>

    <div class="container">
        <div class="login-box">
            <div class="title" id="title-box">
                <h1 class="desktop-text">Faster</h1>
                <h1 class="desktop-text">Appointment</h1>
                <h1 class="desktop-text">Efficient</h1>
                <h1 class="desktop-text">Aid</h1>
                <h1 class="mobile-text" style="display: none;">Login</h1>
            </div>
            <div class="form">
                <form action="login.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    
                    <input type="hidden" name="role" value="<?php echo htmlspecialchars($_POST['role'] ?? ''); ?>"> <!-- Hidden input for role -->
                    
                    <button type="submit">Sign In</button>
                    
                    <div class="forgot-password">
                        <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>
