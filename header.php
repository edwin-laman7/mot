
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOT-Front-Page</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="nav">
        <div class="grid-container nav-main">
          <div class="row">
            <div class="column">
              <div class="mot-header">
                  <img src="assets/icon/mot-logo.svg" alt="">
                  <div class="mot-title">
                      <span>MINISTRY OF TRANSPORT</span>
                      <p>OFFICIAL PORTAL</p>
                  </div>
              </div>
              <div class="search-input-container">
                  <input class="search-input" type="text" placeholder="">
                </div>
              <div class="btn-control">
                <button class="btn-toggle-language">BM</button>
                <button class="btn-toggle-nav" onclick="toggleNav()" id="btn-toggle-nav"><img src="assets/icon/menu-line-icon.svg"> MENU</button>
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
                      <li><a href="#">Safety and Security</a></li>
                      <li><a href="#">Operator & License</a></li>
                      <li><a href="#">Development</a></li>
                      <li><a href="#">Acts and Regulation</a></li>
                      <li><a href="#">Agencies</a></li>
                      <li><a href="#">Programmes</a></li>
                      <li><a href="#">Reports and Stats</a></li>
                    </div>
                  </ul>
                </div>
              </li>
      
              <li class="item" id="land">
                <a href="#land" class="btn">Land</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Land Sub-Menu-1</a></li>
                    <li><a href="#">Land Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>
      
              <li class="item" id="maritime">
                <a href="#maritime" class="btn">Maritime</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Maritime Sub-Menu-1</a></li>
                    <li><a href="#">Maritime Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>

              <li class="item" id="logistics">
                <a href="#logistics" class="btn">Logistics</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Logistics Sub-Menu-1</a></li>
                    <li><a href="#">Logistics Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>

              <li class="item" id="about">
                <a href="#about" class="btn">About</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">About Sub-Menu-1</a></li>
                    <li><a href="#">About Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>

              <li class="item" id="media">
                <a href="#media" class="btn">Media</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Media Sub-Menu-1</a></li>
                    <li><a href="#">Media Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>

              <li class="item" id="business">
                <a href="#business" class="btn">Business</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Business Sub-Menu-1</a></li>
                    <li><a href="#">Business Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>

              <li class="item" id="feedback">
                <a href="#feedback" class="btn">Feedback</a>
                <ul class="nav-sidebar-2">
                  <div class="smenu">
                    <li><a href="#">Feedback Sub-Menu-1</a></li>
                    <li><a href="#">Feedback Sub-Menu-2</a></li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
