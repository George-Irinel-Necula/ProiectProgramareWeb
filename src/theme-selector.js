document.addEventListener("DOMContentLoaded",()=>{
const themeToggle=document.querySelector(".theme-selector")
const themeToggle2=document.querySelector(".theme-selector-mobile")
const body=document.body
let savedTheme=localStorage.getItem("theme")

if (savedTheme) {
    body.setAttribute("data-theme", savedTheme);
} else {
    body.setAttribute("data-theme", "elixirul-tineretii");
  }

function themeselector(tag){
    let target=tag.target.closest("a.dropdown-item")
    let themeName=target.id
    body.setAttribute("data-theme",themeName)
    console.log(themeName)
    body.getAttribute("data-theme")
    localStorage.setItem("theme",themeName)

}
themeToggle.addEventListener("click",themeselector)
themeToggle2.addEventListener("click",themeselector)
})