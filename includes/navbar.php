<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Responsive Navbar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f8f9fa;
            transition: background-color 0.3s;
        }
        .navbar.dark-mode {
            background-color: #333;
        }
        .logo img {
            height: 60px;
        }
        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .nav-links li {
            margin-left: 30px;
        }
        .nav-links a {
            text-decoration: none;
            color: #000;
            transition: color 0.3s;
            font-weight: bold; /* Added */
        }
        .nav-links a.dark-mode {
            color:rgba(255, 255, 255, 0);
        }
        .menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        .dropdown-menu {
            display: none;
            flex-direction: column;
            background-color: #f8f9fa;
            position: absolute;
            top: 60px;
            right: 10px;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }
        .dropdown-menu a {
            text-decoration: none;
            color: #101;
            padding: 10px 0;
            font-weight: bold; /* Added */
        }
        .dropdown-menu.show {
            display: flex;
        }
        .dropdown-menu.dark-mode {
            background-color: #333;
        }
        .dropdown-menu a.dark-mode {
            color: #ffffff;
        }

        /* Centered Search Bar and Dark Mode Toggle */
        .center-items {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        /* Search Bar */
        .search-bar {
            position: relative;
            margin-right: 20px;
        }
        .search-bar input {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
            transition: background-color 0.3s, color 0.3s;
            width: 200px;
        }
        .search-bar input.dark-mode {
            background-color: #333;
            color: #ffffff;
            border: 1px solid #555;
        }

        /* Dark Mode Toggle */
        .dark-mode-toggle {
            cursor: pointer;
            font-size: 20px;
            margin-left: 20px;
        }
        .dark-mode-toggle.dark-mode {
            color: #ffffff;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .menu-icon {
                display: block;
                font-weight: bold;
            }
            .search-bar {
                margin-right: 0;
                margin-bottom: 5px;
                margin-top: 10px;
                font-weight: bold;
            }
            .search-bar input {
                width: 50px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="Images/TheDataDen logo.jpeg" alt="Logo">
    </div>
    <div class="center-items">
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
        <div class="dark-mode-toggle" id="darkModeToggle" style="margin-top: 7px;">
            <img src="Images/night.png" alt="Dark Mode Toggle" style="height: 23px; cursor: pointer;">
        </div>
    </div>
    <ul class="nav-links">
        <li><a href="pages/data_jobs.php">Data Jobs</a></li>
        <li><a href="pages/articles.php">Articles</a></li>
        <li><a href="pages/Interview Questions.php">Interview Questions</a></li>
        <li><a href="pages/About Us.php">About Us</a></li>
        <li><a href="pages/Contact Us.php">Contact Us</a></li>
    </ul>
    <div class="menu-icon">
        Menu &#9776;
    </div>
</nav>

<div class="dropdown-menu">
    <a href="pages/data_jobs.php">Data Jobs</a>
    <a href="pages/articles.php">Articles</a>
    <a href="pages/Interview Questions.php">Interview Questions</a>
    <a href="pages/About Us.php">About Us</a>
    <a href="pages/Contact Us.php">Contact Us</a>
</div>

<script>
    const menuIcon = document.querySelector('.menu-icon');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const darkModeToggle = document.getElementById('darkModeToggle');
    const searchBar = document.querySelector('.search-bar input');
    const body = document.body;
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-links a');
    const dropdownLinks = document.querySelectorAll('.dropdown-menu a');

    // Toggle dropdown menu
    menuIcon.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show');
    });

    // Toggle dark mode
    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        navbar.classList.toggle('dark-mode');
        searchBar.classList.toggle('dark-mode');
        darkModeToggle.classList.toggle('dark-mode');
        dropdownMenu.classList.toggle('dark-mode');
        navLinks.forEach(link => link.classList.toggle('dark-mode'));
        dropdownLinks.forEach(link => link.classList.toggle('dark-mode'));
    });

    // Optional: Close dropdown if clicked outside
    document.addEventListener('click', (e) => {
        if (!menuIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
</script>
</body>
</html>
