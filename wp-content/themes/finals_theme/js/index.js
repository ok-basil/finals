const hamburger = document.getElementsByClassName("hamburger")[0];
const navbarList = document.getElementsByClassName("navbar-list")[0];

hamburger.addEventListener("click", () => {
    navbarList.classList.toggle("active")
})