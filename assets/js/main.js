//VARIABLE TO DECLAIRE STATUS CODE
let toggleNavStatus = false;
let toggleDarkModeStatus = false;

//VARIABLE TO GET CLASS CODE
let getSidebar = document.querySelector(".nav-sidebar");
let getSidebarMenu = document.querySelector(".menu");
let getToggleDarkMode = document.querySelector(".toggle-darkmode-font-size");
let getNavMain = document.querySelector(".nav-main");
// let getNavSidebarListLink = document.querySelectorAll(".smenu ul li a");
let getMOTHeader = document.querySelector(".mot-header");
let getMOTTitleSpan = document.querySelector(".mot-title span");
let getMOTTitleP = document.querySelector(".mot-title p");
let getSearchContainer = document.querySelector(".search-input-container");
let getBtnTglLanguage = document.querySelector(".btn-toggle-language");
let getFooter = document.querySelector("footer");
const menuBtn =  document.querySelector(".menu-btn"); 



//ACTIVATE CHILD CLASS CODE
var li_elements = document.querySelectorAll(".nav-sidebar ul li");
// var item_elements = document.querySelectorAll(".item");
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {


    if (jQuery(this).hasClass("active-child-level2")) {
      $(this).removeClass("active-child-level2");
     }
     else
     {
      li_elements.forEach(function(li) {
        li.classList.remove("active-child-level2");
      });
      this.classList.add("active-child-level2");
     }
  });
}



//MAKE NON-SELECTED OPTION IN SIDEBAR MENU OPACITY LOWER 
$( document ).ready(function() {
  $(".nav-sidebar ul li a").click(function(){
    $(".nav-sidebar ul li a").css("color", "#8C9DB4");
    $(".nav-sidebar ul li ul li a").css("color", "white ");
    $(this).css("color", "white");

    //SIDEBAR-2 MENU SLIDE-IN ANIMATION
    $(".item-active").removeClass("item-active");
    $(this).parent().find(".nav-sidebar-2 ul li").addClass("item-active");

    $("li.item-active").each(function(index){
      $(this).css({
        'animation-delay' : (.1*index) + 's'
      });
    });
  });
});

//SIDEBAR MENU SLIDE-IN ANIMATION
$("li.item").each(function(index){
  $(this).css({
    'animation-delay' : (.1*index) + 's'
  });
});



//DECLAIRE VARIABLE FOR SCREEN WIDTH
var pcwidth = $(window).width();

//TOGGLE NAVIGATION BAR CODE
function toggleNav(){
    
    var w = document.getElementById("s4-workspace");
	w.scrollTop = 0;
    
  if (toggleNavStatus === false) {
    getSidebar.style.width = "100%";
    getSidebarMenu.style.display = "block";
    getToggleDarkMode.style.display = "none";
    getMOTHeader.style.color =  "white"; 
    //getMOTTitleSpan.style.color =  "white"; 
    //getMOTTitleP.style.color =  "white"; 
    getSearchContainer.style.visible =  "hidden"; 
    getBtnTglLanguage.style.visible =  "hidden";

		$(".mot-header").css("color","white");
	
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
    //getMOTTitleSpan.style.color =  "var(--black)"; 
    //getMOTTitleP.style.color =  "var(--black)"; 
    if (pcwidth <= 768){//search input for mobile
      getSearchContainer.style.display = "none";
      getSearchContainer.style.visible = "hidden";
      getNavMain.style.height = "68px";
    }
    menuBtn.classList.remove("close"); 
    toggleNavStatus = false;
	
	
    //Remove all active-child-level2
    var li_elements = document.querySelectorAll(".nav-sidebar ul li");
    for (var i = 0; i < li_elements.length; i++) {
      li_elements.forEach(function(li) {
        li.classList.remove("active-child-level2");
      })
    }
  }
  
  //CHANGE BUTTON AND ICON FROM MENU TO CLOSE  
    var curText = document.getElementById("btn-toggle-nav");
  	console.log('3');
  	if(toggleNavStatus === true){
  		curText.innerHTML = 'CLOSE';
  	} else {
  		curText.innerHTML = 'MENU';
  	}
}

//TOGGLE DARK MODE CODE
$('.toggle-darkmode-font-size').animate({right: -200});
$('.toggle-darkmode-font-size').animate({right: -10});

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
$( document ).ready(function() {
  size=parseInt($(".main h1, .main h2, .main h3, .main h4, .main p, .main a, .main li, footer h1, footer h2, footer h3, footer h4, footer p, footer a, footer li").css('font-size'));

  
  $("#big").on("click",function(){
   
    size+=4;
     $(".main h1, .main h2, .main h3, .main h4, .main p, .main a, .main li, footer h1, footer h2, footer h3, footer h4, footer p, footer a, footer li").css("font-size",size + "px");
  });
  

// let fontSize = parseInt(window.getComputedStyle(body, null).fontSize);
// sessionStorage.setItem("defaultFontSize", fontSize);
// let defaultFontSize = sessionStorage.getItem("defaultFontSize");
  
  $("#normal").on("click",function(){
    size=14;
     $(".main h1, .main h2, .main h3, .main h4, .main p, .main a, .main li, footer h1, footer h2, footer h3, footer h4, footer p, footer a, footer li").css("font-size",size + "px");
  });
  
  
  $("#small").on("click",function(){
    
    size-=2;
    if(size>=0){
     $("p").css("font-size",size+ "px");
    }else{
      alert("VLAUE IS MINUS SO RESET TO 14px");
      size=14
      $("p").css("font-size",size+ "px");
    }
  });
});



//LIGHTBOX FOR BANNER ANNOUNCEMENT CODE
$( document ).ready(function() {
  $('.banner-announcements').magnificPopup({
    delegate: 'a.popup',
    type: 'image',
    gallery:{
      enabled:true
    }
  });
});

$(document).ready(function() {
  $('.light-box').magnificPopup({
    type:'image',
    zoom: {
      enabled: true,
      duration: 500, // don't foget to change the duration also in CSS
      //easing: 'ease-in-out',
      opener: function(element) {
        //return element.find('img');
        return element.is('img') ? element : element.find('img');
      }
    }

  });
});



//MAIN SECTOR DESKTOP POSITION CODE
if(pcwidth > 768){//Desktop Menu Button
  $(".main-sector").addClass("main-sector-desktop");
}
else if (pcwidth<=768){//Mobile Menu Button
  $(".main-sector-desktop").removeClass("main-sector-desktop");
}


$(document).ready(function(){

  // $(window).scroll(function(){
  //   if($(this).scrollTop()>108){
  //     // $(".nav-main").css({position: "fixed"});
  //     console.log(position);
  //   }
  // });



  $(window).scroll(function() {
    var breadcrumbPos = $('.breadcrumb-wrap');
    var distance = breadcrumbPos.offset().top();
      if ( $(this).scrollTop() >= distance ) {
          // console.log('is in top');
          $(".breadcrumb-menu-btn").css({display: "block"});
          var breadcrumb = "top"; 
      } else {
          // console.log('is not in top');
          $(".breadcrumb-menu-btn").css({display: "none"});
          var breadcrumb = "not-in-top"; 
      }
      
      //Change home in breadcrumb to mot-logo
      if(breadcrumb == "top"){
        $(".breadcrumb-home").html('<img src="assets/img/mot-logo-small.png" alt="">');
      }
      else if (breadcrumb == "not-in-top"){
        $(".breadcrumb-home").html('Home');
      }

  });
});