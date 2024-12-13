<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Platform Manajemen Distribusi dan Ketahanan Pangan Nasional">
    <meta name="author" content="Pangan Vision Development Team">

    <title>Pangan Vision</title>

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #4e73df;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div>Pangan Vision</div>
        <div>
            <a href="#">Dashboard</a>
            <a href="#">Profile</a>
            <a href="#">Logout</a>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Menu</h3>
        <a href="#">Dashboard</a>
        <a href="#">Stocks</a>
        <a href="#">Logistics</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Pangan Vision</h1>
        <p>This is the dashboard for managing food distribution and stock information.</p>

        <div style="margin-top: 20px;">
            <h2>Overview</h2>
            <p>Placeholder for stock and logistics data.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Pangan Vision Development Team
    </footer>
</body>

</html>
