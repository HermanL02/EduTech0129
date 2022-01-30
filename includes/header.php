<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Study Room Taka</title> 
</head>
<body>
    <div class="navbar">
        <div class="logo"><a href="#">CodingLab</a></div>

        <div class="appearance">
          <div class="light-dark">
            <i class="btn fas fa-moon" data-color="#e4e6eb #e4e6eb #24292D #24292D #242526"></i>
          </div>
          <div class="color-icon">
            <div class="icons">
              <i class="fas fa-palette"></i>
              <i class="fas fa-sort-down arrow"></i>
            </div>
            <div class="color-box">
              <h3>Color Switcher</h3>
              <div class="color-switchers">
                <button class="btn blue active" data-color="#fff #24292d #4070f4 #0b3cc1 #F0F8FF"></button>
                <button class="btn orange" data-color="#fff #242526 #F79F1F #DD8808 #fef5e6"></button>
                <button class="btn purple" data-color="#fff #242526 #8e44ad #783993 #eadaf1"></button>
                <button class="btn green" data-color="#fff #242526 #3A9943 #2A6F31 #DAF1DC"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.jpeg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Study Room</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="courseSelecting.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Presentation</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="upload.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Upload</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                        <a href="analytics.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>
<!-- 
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li> -->

                </ul>
            </div>


            <div class="bottom-content">
                <li class="logout.php">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    <section class="home">
        <div class="text">Study Room @Taka</div>