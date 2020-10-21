<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOT-Front-Page</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
    <script src="js/theme.js"></script>  
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css"/>
        <!-- Magnific popup css -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
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
                      <p>OFFICIAL PORTAL</p>
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
<main>
    <!-- Main Sector Code-->
    <div class="grid-container main-sector">
      <div class="main-sector-background">
        <div class="row">
          <div class="column small-12">
            <div class="main-sector-caption">
              <h3>Moving people and goods safely, efficiently and sustainably accross Malaysia to improve quality of life and support a competitive economy.</h3>
            </div>
            <div class="main-sector-button">
              <button>Aviation</button>
              <button>Land</button>
              <button>Maritime</button>
              <button>Logistic</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Announcement Code -->
    <div class="banner-announcements-header">
        Highlight
    </div>
    <div class="grid-container banner-announcements"> 
        <div class="row">
          <div class="column text-center">
            <div class="responsive">
              <div class="column">
                <button>
                  <a href="assets/img/banci-malaysia.jpg">
                    <img src="assets/img/banci-malaysia.jpg" alt="Banci">
                  </a>
                    <span class="banner-announcement-caption">Bancian Penduduk dan Perumahan Malaysia</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/63-years-malaysia.jpg">
                    <img src="assets/img/63-years-malaysia.jpg" alt="Jalur Gemilang - 63">  
                  </a>
                  <span class="banner-announcement-caption">63 Years Malaysia Celebration</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/covid-19.jpg">
                    <img src="assets/img/covid-19.jpg" alt="Covid"">
                  </a>
                  <span class="banner-announcement-caption">Covid-19 Updates</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/63-years-malaysia.jpg">
                    <img src="assets/img/63-years-malaysia.jpg" alt="Jalur Gemilang - 63">  
                  </a>
                  <span class="banner-announcement-caption">63 Years Malaysia Celebration</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/covid-19.jpg">
                    <img src="assets/img/covid-19.jpg" alt="Covid"">
                  </a>
                  <span class="banner-announcement-caption">Covid-19 Updates</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/63-years-malaysia.jpg">
                    <img src="assets/img/63-years-malaysia.jpg" alt="Jalur Gemilang - 63">  
                  </a>
                  <span class="banner-announcement-caption">63 Years Malaysia Celebration</span>
                </button>
              </div>
              <div class="column">
                <button>
                  <a href="assets/img/dummy-banner.jpg">
                    <img src="assets/img/dummy-banner.jpg" alt="Covid"">
                  </a>
                  <span class="banner-announcement-caption">Covid-19 Updates</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Front Topic Code -->
    <div class="front-topic-header">
        Browse By Topic
    </div>
    <div class="grid-container front-topic">
        <div class="row">
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/infrastructure-icon.png" alt="infrastruture-icon">
                <h2><a href="#">Infrastructure</a></h2>
                <p>Ready transportation Infrastruture in Malaysia.</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/safety-and-security-icon.png" alt="safetyAndSecurity-icon">
                <h2><a href="#">Safety and Security</a></h2>
                <p>Protect against internal and external transportation threats.</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/operator-and-license-icon.png" alt="operatorAndLicense-icon">
                <h2><a href="#">Operator And License</a></h2>
                <p>Available applicable transportation operator license.</p>
            </div>
        </div>
        <div class="row">
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/development-icon.png" alt="development-icon">
                <h2><a href="#">Development</a></h2>
                <p>New and ongoing transportation projects across Malaysia.</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/agencies-icon.png" alt="agencies-icon">
                <h2><a href="#">Agencies</a></h2>
                <p>Enforcement Agencies under Transportation Ministry</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/acts-and-regulation-icon.png" alt="actsAndRegulation-icon">
                <h2><a href="#">Acts and Regulation</a></h2>
                <p>Transportation Law governing Air, Land and Water.</p>
            </div>
        </div>
        <div class="row">
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/reports-and-stats-icon.png" alt="reportsAndStats-icon">
                <h2><a href="#">Reports and Stats</a></h2>
                <p>Official Transportation Reports and Statistics.</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/programmes-icon.png" alt="programmes-icon">
                <h2><a href="#">Programmes</a></h2>
                <p>Programmes to help transportation businesses and individuals.</p>
            </div>
            <div class="column small-12 medium-4">
                <img src="assets/img/index2/feedback-and-complaint-icon.png" alt="feedbackAndComplaint-icon">
                <h2><a href="#">Feedback and Complaint</a></h2>
                <p>Provide feedback or complaints to improve transportation policies.</p>
            </div>
        </div>
    </div>
    <!-- News and Development Code -->
    <div class="grid-container mot-news-developments" style="background-color:var(--banner-quicklinks-footer-bg-color);">
        <div class="row">
          <div class="column small-12 medium-6">
            <h2>MOT in the News</h2>
            <ul class="no-bullet">
              <li><span class="date">20/09</span> <a href="#"> Govt Gets Tough On Traffic Offences</a></li>
              <li><span class="date">20/09</span> <a href="#"> JB - S'PORE RTS Expected To Run By 2026</a></li>
              <li><span class="date">20/09</span> <a href="#"> RTS Project To Be inked On July 30</a></li>
              <li><span class="date">20/09</span> <a href="#"> M'sia Vows To Seek Closure for MH17 families</a></li>
            </ul>
            <a href="#">More News</a>
          </div>
          <div class="column small-12 medium-6">
            <h2>Future Developments</h2>
            <ul class="no-bullet">
              <li><a href="#">MRT and LRT3 Project Status</a></li>
              <li><a href="#">Klang Valley Dual Track 2 (KVDT2)</a></li>
              <li><a href="#">Malaysia-Singapore Rapid Transit System (RTS)</a></li>
              <li><a href="#">Special Report Air Investigation</a></li>
            </ul>
            <a href="#">More Developments</a>
          </div>
        </div>
      </div>
      <!-- Agencies Under Mot Code -->
      <div class="grid-container agencies-under-mot">
        <div class="row">
          <div class="column small-12 medium-12">
            <h2>Agencies Under MOT</h2>
          </div>
          <div class="columns small-12 medium-4 aviation-agencies">
            <h3>Aviation</h3>
            <ul class="no-bullet">
              <li>
                <span>Flight safety, air traffic controller, flight school, pilot license.</span>
                <p><a href="#">Civil Aviation Authority Malaysia (DCA)</a></p>
              </li>
              <li>
                <span>Public air transportation, flight refund, air traffic rights, aviation economic.</span>
                <p><a href="#">Malaysia Aviation Commission (MAVCOM)</a></p>
              </li>
            </ul>
          </div>
          <div class="columns small-12 medium-4 land-logistics-agencies">
            <h3>Land and Logistics</h3>
            <ul class="no-bullet">
              <li>
                <span>Vehicle registration, driving licenses, summons, road safety.</span>
                <p><a href="#">Road Transport Department (JPJ)</a></p>
              </li>
              <li>
                <span>e-Hailing, LRT, MRT, train, bus, taxi transport matters.</span>
                <p><a href="#">Land Public Transport Agency (APAD)</a></p>
              </li>
              <li>
                <span>Road and public transportation safety.</span>
                <p><a href="#">Land Public Transport Agency (APAD)</a></p>
              </li>
            </ul>
          </div>
          <div class="columns small-12 medium-4 maritime-agencies">
            <h3>Maritime</h3>
            <ul class="no-bullet">
              <li>
                <span>Marine, shipping, ferry, port policy and marine notices.</span>
                <p><a href="#">Marine Department Malaysia (MDM)</a></p>
              </li>
              <li>
                <span>Ocean law, Malacca Straits, Sea security/safety, marine industries</span>
                <p><a href="#">Maritime Institute of Malaysia (MIMA)</a></p>
              </li>
              <li>
                <span>Port authorities, Port Klang, Johor Port, Kuantan Port, Bintulu Port, Penang</span>
                <p><a href="#">All port authorities</a></p>
              </li>
            </ul>
          </div>
      </div>
    </div>
</main>
<footer>
<div class="row">
        <div class="column small-12 medium-5 mot-info">
          <img src="assets/img/mot-logo.png"  alt="mot-logo" id="mot-logo">
          <h4>Ministry of Transport Malaysia</h4>
          <p>No. 26, Jalan Tun Hussein, Presint 4, 62100 W.P. Putrajaya</p>
        
          <div class="mini-left">
            <ul class="no-bullet">
            <li><i class="fas fa-phone-alt"></i> <a href="#">03-8000 8000</a></li>
            <li><i class="fas fa-print"></i> <a href="#">03-8888 0158</a></li>
            </ul>
          </div>
          <div class="mini-right">
            <ul class="no-bullet">
            <li><i class="fas fa-envelope"></i> <a href="#">aduan@mot.gov.my</a></li>
            </ul>
            <ul class="no-bullet social-links" >
            <li><a href="#"><i class="fab fa-facebook-f fa-lg"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram fa-lg"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube fa-lg"></i></a></li>
            <li><a href="#"><i class="fas fa-rss fa-lg"></i></a></li>
          </ul>
          </div>
        </div>
        <div class="column small-12 medium-1"></div>
        <div class="column small-12 medium-3">
          <h4>Topics</h4>
          <ul class="no-bullet">
            <li><a href="#">Infrastructure</a></li>
            <li><a href="#">Safety</a></li>
            <li><a href="#">Operators & License</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">Agencies</a></li>
            <li><a href="#">Acts and Regulations</a></li>
            <li><a href="#">Reports and Stats</a></li>
            <li><a href="#">Programme</a></li>
          </ul>
        </div>
        <div class="column small-12 medium-3">
        <h4>Departments</h4>
          <ul class="no-bullet">

            <li><a href="#">Aviation</a></li>
            <li><a href="#">land</a></li>
            <li><a href="#">Maritime</a></li>
            <li><a href="#">Logistics</a></li>
          </ul>

        </div>
        
        </div>
      <div class="grid-container footer-quick-links ">
        <div class="row">
          <div class="column small-12">
            <ul class="no-bullet">
              <li><a href="#">Home</a></li> |
              <li><a href="#">Site Map</a></li> |
              <li><a href="#">Security Policy</a></li> |
              <li><a href="#">Privacy Policy</a></li> |
              <li><a href="#">Disclaimer</a></li> |
              <li><a href="#">Freedom of Information</a></li> |
              <li><a href="#">FAQ's</a></li>
          </ul>
          </div>
    </footer>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
        <!-- Magnific popup js -->
	      <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

  </body>
</html>