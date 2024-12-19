var menuItems = document.getElementById("menuItems");
menuItems.style.maxHeight = "0px";
function menutoogle() {
    if (menuItems.style.maxHeight == "0px")
    {
        menuItems.style.maxHeight = "200px";
    }
    else
    {
        menuItems.style.maxHeight="0px";
    }
}
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior:"smooth"
        });
    });
});