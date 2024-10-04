<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In As</title>
    <link rel="stylesheet" href="../css/login_as.css">
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
            </div>
            <div class="form">
                <form action="login.php" method="POST">
                    <h2>Log In as</h2>
                    <!-- Two buttons: Admin and Clinic Staff -->
                    <button type="submit" name="role" value="admin" style="margin-bottom: 20px;">Admin</button>
                    <button type="submit" name="role" value="clinic_staff">Clinic Staff</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
