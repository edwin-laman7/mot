//VARIABLE TO DECLAIRE STATUS CODE
let toggleNavStatus = false;
let toggleDarkModeStatus = false;

//VARIABLE TO GET CLASS CODE
let getSidebar = document.querySelector(".nav-sidebar");
let getSidebarMenu = document.querySelector(".menu");
let getToggleDarkMode = document.querySelector(".toggle-darkmode-font-size");
let getNavMain = document.querySelector(".nav-main");
let getMOTHeader = document.querySelector(".mot-header");
let getMOTTitleSpan = document.querySelector(".mot-title span");
let getMOTTitleP = document.querySelector(".mot-title p");
let getSearchContainer = document.querySelector(".search-input-container");
let getBtnTglLanguage = document.querySelector(".btn-toggle-language");
let getFooter = document.querySelector("footer");
const menuBtn =  document.querySelector(".menu-btn"); 



//ACTIVATE CHILD CLASS CODE
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

//DECLAIRE VARIABLE FOR SCREEN WIDTH
var pcwidth = $(window).width();

//TOGGLE NAVIGATION BAR CODE
function toggleNav(){
    if (toggleNavStatus === false) {
        getSidebar.style.width = "100%";
        getSidebarMenu.style.display = "block";
        getToggleDarkMode.style.display = "none";
        getMOTHeader.style.color =  "white"; 
        getMOTTitleSpan.style.color =  "white"; 
        getMOTTitleP.style.color =  "white"; 
        getSearchContainer.style.visible =  "hidden"; 
        getBtnTglLanguage.style.visible =  "hidden"; 

        if (pcwidth <= 768){//search input for mobile
          getSearchContainer.style.display = "block";
          getSearchContainer.style.visible = "visible";
          getSearchContainer.style.position = "relative";
          getNavMain.style.height = "108px";
        }

        menuBtn.classList.add("close"); 



        toggleNavStatus = true;
    }
    else if (toggleNavStatus === true) {
        getSidebar.style.width = "0px";
        getSidebarMenu.style.display = "none";
        getToggleDarkMode.style.display = "block";
        getSearchContainer.style.visible =  "visible";
        getBtnTglLanguage.style.visible =  "visible";  
        getMOTHeader.style.color =  "#193B6A";
        getMOTTitleSpan.style.color =  "var(--black)"; 
        getMOTTitleP.style.color =  "var(--black)"; 


        if (pcwidth <= 768){//search input for mobile
          getSearchContainer.style.display = "none";
          getSearchContainer.style.visible = "hidden";
          getNavMain.style.height = "68px";
        }

        menuBtn.classList.remove("close"); 

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
      if (x.innerHTML === 'MENU') {
        x.innerHTML = 'CLOSE';
      } else {
        x.innerHTML = 'MENU';
      }
    }
    else if (pcwidth<=425){//Mobile 
      var x = document.getElementById("btn-toggle-nav");
      if (x.innerHTML === 'MENU') {
        x.innerHTML = '';
      } else {
        x.innerHTML = 'MENU';
      }
    }
}

//TOGGLE DARK MODE CODE
$('.toggle-darkmode-font-size').animate({right: -200});
$('.toggle-darkmode-font-size').animate({right: 0});

const userPrefers = getComputedStyle(document.documentElement).getPropertyValue('content');	

if (theme === "dark") {
	// document.getElementById("theme-toggle").innerHTML = "Light Mode";
} else if (theme === "light") {
	// document.getElementById("theme-toggle").innerHTML = "Dark Mode";
} else if  (userPrefers === "dark") {
	document.documentElement.setAttribute('data-theme', 'dark');
  setCookie('theme','dark',360); 
} else {
	document.documentElement.setAttribute('data-theme', 'light');
  setCookie('theme','light',360); 
}

function modeSwitcher() {
	let currentMode = document.documentElement.getAttribute('data-theme');
	if (currentMode === "dark") {
		document.documentElement.setAttribute('data-theme', 'light');
    setCookie('theme','light',360); 
	} else {
		document.documentElement.setAttribute('data-theme', 'dark');
    setCookie('theme','dark',360); 
	}
}


//TOGGLE INCREASE AND RESET FONT CODE
  //retrieving, and caching, the <body> element:
var body = document.body;
  //find the defaultFontSize and save it in session
let fontSize = parseInt(window.getComputedStyle(body, null).fontSize);
sessionStorage.setItem("defaultFontSize", fontSize);
let defaultFontSize = sessionStorage.getItem("defaultFontSize");

function increaseFontSize(){
  var max = 25;
    //finding the current computed fontSize of the <body> element, parsing it
    currentFontSize = parseInt(window.getComputedStyle(body, null).fontSize);

    //if the currentFontSize is less than the specified max:
  if (currentFontSize < max){
    //we set the fontSize of the <body> to the incremented fontSize,
    //increasing the current value by 1, and concatenating with the 'px' unit:
    body.style.fontSize = ++currentFontSize + 'px';
  }
}

function resetFontSize(){
    //finding the current computed fontSize of the <body> element, parsing it
  currentFontSize = parseInt(window.getComputedStyle(body, null).fontSize);

    //if the currenFontSize of the <body> is not equal to the defaultFontSize
  if (currentFontSize != defaultFontSize){
    //we set the currentFontSize to the defaultFontSize
    body.style.fontSize = defaultFontSize + 'px';
  }
  
}


