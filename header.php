<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOT-Front-Page</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
    <script src="assets/js/theme.js"></script>  
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fix.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css"/>
        <!-- Magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="nav">
        <div class="grid-container nav-main">
          <div class="row">
            <div class="column">
              <div class="mot-header">
                  <a href="index.php">
                  <img src="assets/img/mot-logo.png" alt="">
                  <div class="mot-title">
                      <span>MINISTRY OF TRANSPORT</span>
                      <p>MALAYSIA OFFICIAL PORTAL</p>
                  </div>
                </a>
              </div>
              <div class="search-input-container">
                  <form action="">
                    <input class="search-input" type="text" placeholder="">
                  </form>
              </div>
              <div class="btn-control">
                <button class="btn-toggle-language">BM</button>
                <button class="btn-toggle-nav" onclick="toggleNav()">
                  <div class="menu-btn">
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                  </div>
                 <div id="btn-toggle-nav" class="btn-toggle-menu-position">MENU</div>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="nav-sidebar">
          <div class="menu">
            <ul>
              <li class="item" id='aviation' >
                <a href="#aviation" class="btn">Aviation</a>
                <div class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li><a href="#">Infrastructure</a></li>
                      <li ><a href="#">Safety and Security</a></li>
                      <li ><a href="#">Operator & License</a></li>
                      <li ><a href="#">Development</a></li>
                      <li ><a href="#">Acts and Regulation</a></li>
                      <li ><a href="#">Agencies</a></li>
                      <li ><a href="#">Programmes</a></li>
                      <li ><a href="#">Reports and Stats</a></li>
                    </div>
                  </ul>
                </div>
              </li>
      
              <li class="item" id="land">
                <a href="#land" class="btn">Land</a>
                  <div class="nav-sidebar-2">
                    <ul>
                      <div class="smenu">
                        <li ><a href="#">Land Sub-Menu-1</a></li>
                        <li ><a href="#">Land Sub-Menu-2</a></li>
                      </div>
                    </ul>
                  </div>
              </li>
      
              <li class="item" id="maritime">
                <a href="#maritime" class="btn">Maritime</a>
                <div class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li ><a href="#">Maritime Sub-Menu-1</a></li>
                      <li ><a href="#">Maritime Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>

              <li class="item" id="logistics">
                <a href="#logistics" class="btn">Logistics</a>
                <div class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li ><a href="#">Logistics Sub-Menu-1</a></li>
                      <li ><a href="#">Logistics Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>

              <li class="item" id="about">
                <a href="#about" class="btn">About</a>
                <div class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li><a href="#">About Sub-Menu-1</a></li>
                      <li><a href="#">About Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>

              <li class="item" id="media">
                <a href="#media" class="btn">Media</a>
                <div class="nav-sidebar-2">
                  <ul >
                    <div class="smenu">
                      <li><a href="#">Media Sub-Menu-1</a></li>
                      <li><a href="#">Media Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>

              <li class="item" id="business">
                <a href="#business" class="btn">Business</a>
                <div class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li><a href="#">Business Sub-Menu-1</a></li>
                      <li><a href="#">Business Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>

              <li class="item" id="feedback">
                <a href="#feedback" class="btn">Feedback</a>
                <div  class="nav-sidebar-2">
                  <ul>
                    <div class="smenu">
                      <li><a href="#">Feedback Sub-Menu-1</a></li>
                      <li><a href="#">Feedback Sub-Menu-2</a></li>
                    </div>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
     <!-- Toggle Dark Mode / Font Size Code -->
    <div>
      <div class="toggle-darkmode-font-size">
        <!-- <button id="toggleDarkMode"><i class="far fa-moon"></i></button> -->
        <button id="theme-toggle" onclick="modeSwitcher()"><i class="far fa-moon"></i></button>
        <button onclick="resetFontSize()"><i class="fas fa-font"></i></button>
        <button onclick="increaseFontSize()"><i class="fas fa-plus"></i></button>
      </div>
    </div>
