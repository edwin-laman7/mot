
//This JavaScript is only for the code that need to run first before everything else (such as theme Checker). JavaScript for the site function/animation should not be here


//Code to set the Function for setCookie(), getCookie(), eraseCookie()
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
  }
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
  }
  function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  }

  

//Code to check if the html is already in 'light' or 'dark' theme  
const theme = getCookie('theme');
  if (theme === "dark") {
    document.documentElement.setAttribute('data-theme', 'dark');
}
