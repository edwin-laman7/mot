let toggleNavStatus = false;

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

//Change Menu+Icon to just Icon Only (KIV)
if(pcwidth<=425){
  document.getElementById("btn-toggle-nav").innerHTML ='<img src="assets/icon/menu-line-icon.svg">';

}




//Toggle Navigation Bar
function toggleNav(){
    let getSidebar = document.querySelector(".nav-sidebar");
    let getSidebarMenu = document.querySelector(".menu");
    let getToggleDarkMode = document.querySelector(".toggle-darkmode-font-size");
    let getNavMain = document.querySelector(".nav-main");
    let getMOTHeader = document.querySelector(".mot-header");
    let getSearchContainer = document.querySelector(".search-input-container");
    let getBtnTglLanguage = document.querySelector(".btn-toggle-language");
    let getMainContent = document.querySelector("main");
    let getFooter = document.querySelector("footer");

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
    
    if(pcwidth > 320){//Desktop Menu Button
      var x = document.getElementById("btn-toggle-nav");
      if (x.innerHTML === '<img src="assets/icon/menu-line-icon.svg"> MENU') {
        x.innerHTML = '<img src="assets/icon/menu-close-icon.svg"> CLOSE';
      } else {
        x.innerHTML = '<img src="assets/icon/menu-line-icon.svg"> MENU';
      }
    }
    else if (pcwidth<=320){//Mobile 
      document.getElementById("btn-toggle-nav").innerHTML ='<img src="assets/icon/menu-line-icon.svg">';
    }
}






