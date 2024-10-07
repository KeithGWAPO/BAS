<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard_staff.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-title">
                <img src="../assets/logo12.jpg" alt="Logo" class="logo">
                <h1>Brgy. Clinic</h1>
            </div>
            <button class="user-button">
                <div class="avatar-frame">
                    <img src="../assets/avatar.png" alt="User Avatar" class="avatar">
                </div>
                <span class="user-name">User Name</span>
            </button>
        </div>
    </header>

    <div class="dashboard-container">
        <nav class="sidebar" id="sidebar">
            <ul>
                <li><a href="#"><span class="icon">🏠</span><span class="text">Dashboard</span></a></li>
                <li><a href="#"><span class="icon">📝</span><span class="text">Appointments</span></a></li>
                <li><a href="#"><span class="icon">📋</span><span class="text">Records</span></a></li>
                <li><a href="#"><span class="icon">🗂️</span><span class="text">Archive</span></a></li>
                <li><a href="#"><span class="icon">🔒</span><span class="text">Logout</span></a></li>
            </ul>
        </nav>

        <div class="content">
            <h2>Dashboard Content</h2>
            <p>Welcome to the dashboard!</p>

            <!-- Buttons for Total Appointments, Completed Appointments, Pending Appointments -->
            <div class="stats-container">
                <button class="stat-button">Total Appointments</button>
                <button class="stat-button">Completed Appointments</button>
                <button class="stat-button">Pending Appointments</button>
            </div>
        </div>
    </div>

    <script src="../js/dashboard_staff.js"></script>
</body>
</html>
