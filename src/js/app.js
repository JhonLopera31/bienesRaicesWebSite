document.addEventListener("DOMContentLoaded", function () {
    eventListeners();
    darkMode();
})


function darkMode() {
    const botonDarkMode = document.querySelector(".dark-mode-boton")

    const systemDarkModePreferences = window.matchMedia("(prefers-color-scheme:dark)")// checking system preferences

    if (systemDarkModePreferences.matches) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }

    // if user change the preferences this functions sense that change and update the view mode
    systemDarkModePreferences.addEventListener("change", function () {
        if (systemDarkModePreferences.matches) {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
        }
    })

    botonDarkMode.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
    });
}

function eventListeners() {




    const mobileMenu = document.querySelector(".mobile-menu");
    mobileMenu.addEventListener("click", navegacionREsponsive);

}

function navegacionREsponsive() {
    const navegacion = document.querySelector(".navegacion")

    navegacion.classList.toggle("mostrar") // if exist delete it and if not add it


}