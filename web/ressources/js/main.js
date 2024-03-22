

  function toggleMode() {
    
    const html = document.querySelector("html");
    let mode = document.getElementById("flexSwitchCkeckCheked").checked;
    
    if (mode) {
      html.setAttribute("data-bs-theme", "dark");
      sessionStorage.setItem("theme", "dark"); // Store theme preference in session storage

    }else{
    html.setAttribute("data-bs-theme", "light");
    sessionStorage.setItem("theme", "light"); // Store theme preference in session storage

    }
   
  }
  // Check session storage for theme preference when the page loads
window.addEventListener('DOMContentLoaded', (event) => {
    const html = document.querySelector("html");
    const theme = sessionStorage.getItem("theme");
    
    if (theme === "dark") {
        html.setAttribute("data-bs-theme", "dark");
        document.getElementById("flexSwitchCkeckCheked").checked = true;
    } else {
        html.setAttribute("data-bs-theme", "light");
        document.getElementById("flexSwitchCkeckCheked").checked = false;
    }
});