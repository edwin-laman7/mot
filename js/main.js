let toggleNavStatus = false;
let toggleDarkModeStatus = false;

//Get Class
let getAllHeading = document.querySelectorAll("h1, h2, h3, h4, h5, h6");
let getSidebar = document.querySelector(".nav-sidebar");
let getSidebarMenu = document.querySelector(".menu");
let getToggleDarkMode = document.querySelector(".toggle-darkmode-font-size");
let getNavMain = document.querySelector(".nav-main");
let getMOTHeader = document.querySelector(".mot-header");
let getSearchContainer = document.querySelector(".search-input-container");
let getBtnTglLanguage = document.querySelector(".btn-toggle-language");
let getMainContent = document.querySelector("main");
let getFooter = document.querySelector("footer");
let getFooterLinks = document.querySelectorAll("footer a");
let getBannerAnnouncement = document.querySelector(".banner-announcements");
let getBannerSliderCaption = document.querySelectorAll(".banner-announcement-caption");//kiv
let getQuickLinks = document.querySelector(".quick-links");
let getAllLinks = document.querySelectorAll("a");
let getFrontTopicLinks = document.querySelectorAll(".front-topic a");
let getSlickArrow = document.querySelector(".slick-arrow");




//Avtivate Child Class
var li_elements = document.querySelectorAll(".nav-sidebar ul li");
var item_elements = document.querySelectorAll(".item");
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {
    li_elements.forEach(function(li) {
      li.classList.remove("active-child-level2");
    });
    this.classList.add("active-child-level2");
  });
}

//Declaire variable for Screen Width
var pcwidth = $(window).width();



//TOGGLE NAVIGATION BAR CODE
function toggleNav(){
    if (toggleNavStatus === false) {
        getSidebar.style.width = "100%";
        getSidebarMenu.style.display = "block";
        getToggleDarkMode.style.display = "none";
        getNavMain.style.backgroundColor =  "#193B6A"; 
        getMOTHeader.style.color =  "white"; 
        getSearchContainer.style.visible =  "hidden"; 
        getBtnTglLanguage.style.visible =  "hidden"; 
        getMainContent.style.display =  "none"; 
        getFooter.style.display =  "none"; 
        toggleNavStatus = true;
    }
    else if (toggleNavStatus === true) {
        getSidebar.style.width = "0px";
        getSidebarMenu.style.display = "none";
        getToggleDarkMode.style.display = "block";
        getNavMain.style.backgroundColor =  "white"; 
        getSearchContainer.style.visible =  "visible";
        getBtnTglLanguage.style.visible =  "visible";  
        getMOTHeader.style.color =  "#193B6A";
        getMainContent.style.display =  "block"; 
        getFooter.style.display =  "block"; 
        toggleNavStatus = false;

        var li_elements = document.querySelectorAll(".nav-sidebar ul li");
        for (var i = 0; i < li_elements.length; i++) {
            li_elements.forEach(function(li) {
                li.classList.remove("active-child-level2");
              })
        }
    }

    //Change Button From Menu To Close
    
    if(pcwidth > 425){//Desktop Menu Button
      var x = document.getElementById("btn-toggle-nav");
      if (x.innerHTML === '<img src="assets/icon/menu-line-icon.svg"> MENU') {
        x.innerHTML = '<img src="assets/icon/menu-close-icon.svg"> CLOSE';
      } else {
        x.innerHTML = '<img src="assets/icon/menu-line-icon.svg"> MENU';
      }
    }
    else if (pcwidth<=425){//Mobile 
      var x = document.getElementById("btn-toggle-nav");
      if (x.innerHTML === '<img src="assets/icon/menu-line-icon.svg"> MENU') {
        x.innerHTML = '<img src="assets/icon/menu-close-icon.svg">';
      } else {
        x.innerHTML = '<img src="assets/icon/menu-line-icon.svg"> MENU';
      }
    }
}

//TOGGLE DARK MODE CODE
let darkMode = sessionStorage.getItem("darkMode");

  //check if dark mode is enabled
  //if it's enabled, turn it off
  //if it's disabled, turn it on

  //Code if DarkMode Enable
const enableDarkMode = () => {
  document.body.style.backgroundColor = "#222222";
  document.body.style.color = "white";
  for (i = 0; i < getAllHeading.length; i++) {
    getAllHeading[i].style.color = "white";
  }
  for (i = 0; i < getAllLinks.length; i++) {
    getAllLinks[i].style.color = "#7AC4FC";
  }

  //navigation-bar
  getNavMain.style.backgroundColor = "#222222";
  getMOTHeader.style.color = "white";
  getBtnTglLanguage.style.color = "white";




  //banner-announcement
  getBannerAnnouncement.style.backgroundColor= "#101010";
  for (i = 0; i < getBannerSliderCaption.length; i++) {
    getBannerSliderCaption[i].style.color = "white";
  }


  //quick-links
  getQuickLinks.style.backgroundColor= "#101010";

  //footer
  getFooter.style.backgroundColor = "#101010";
  for (i = 0; i < getFooterLinks.length; i++) {
    getFooterLinks[i].style.color = "white";
  }

  sessionStorage.setItem("darkMode", "enabled");
  
}

  //Code if DarkMode Disabled
const disableDarkMode = () => {
      //global
      document.body.style.backgroundColor = "#fefefe";
      document.body.style.color = "black";
      for (i = 0; i < getAllHeading.length; i++) {
        getAllHeading[i].style.color = "black";
      }
      for (i = 0; i < getAllLinks.length; i++) {
        getAllLinks[i].style.color = "#2680EB";
      }
  
      //navigation-bar
      getNavMain.style.backgroundColor = "white";
      getMOTHeader.style.color = "#193B6A";
      getBtnTglLanguage.style.color = "#193B6A";
  
      //front-topic
      for (i = 0; i < getFrontTopicLinks.length; i++) {
        getFrontTopicLinks[i].style.color = "#193B6A";
      }
  
      //banner-announcement
      getBannerAnnouncement.style.backgroundColor= "#F1F3F6";
      for (i = 0; i < getBannerSliderCaption.length; i++) {
        getBannerSliderCaption[i].style.color = "black";
      }
      
      //quick-links
      getQuickLinks.style.backgroundColor= "#F1F3F6";
  
      //footer
      getFooter.style.backgroundColor = "#F1F3F6";
      for (i = 0; i < getFooterLinks.length; i++) {
        getFooterLinks[i].style.color = "black";
      }

      sessionStorage.setItem("darkMode", null);
}

  //Check if the session already enabled the dark mode
if (darkMode === "enabled"){
  enableDarkMode();
}

  //Check and set the darkmode
function toggleDarkMode(){
  darkMode = sessionStorage.getItem("darkMode");
  if (darkMode !== "enabled"){
    enableDarkMode();
  }else{
    disableDarkMode();
  }
} 
