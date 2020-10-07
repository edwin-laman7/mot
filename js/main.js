let toggleNavStatus = false;




// Activation for Sub-Menu-2
var li_elements = document.querySelectorAll(".nav-sidebar li");
var item_elements = document.querySelectorAll(".item");
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {
    li_elements.forEach(function(li) {
      li.classList.remove("active-child-level2");
    });
    this.classList.add("active-child-level2");
  });
}


//Toggle Menu Button
function toggleNav(){
    let getSidebar = document.querySelector(".nav-sidebar");
    let getMain = document.querySelector("main");
    let getFooter = document.querySelector("footer");
    if (toggleNavStatus === false) {
        getSidebar.style.display = "block";
        getSidebar.style.width = "100%";
        getMain.style.display = "none";
        getFooter.style.display = "none";
        toggleNavStatus = true;
        
    }

    else if (toggleNavStatus === true) {
        
        getSidebar.style.width = "0px";
        getMain.style.display = "block";
        getFooter.style.display = "block";
        toggleNavStatus = false;

        //Close sub-menu-2
        var li_elements = document.querySelectorAll(".nav-sidebar li");
        for (var i = 0; i < li_elements.length; i++) {
            li_elements.forEach(function(li) {
                li.classList.remove("active-child-level2");
              })
        }
        
        
    }

}


