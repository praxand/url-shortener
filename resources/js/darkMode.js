const themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
const themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
localStorage.getItem("theme") === "dark" ||
(!("theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
    ? themeToggleLightIcon.classList.remove("hidden")
    : themeToggleDarkIcon.classList.remove("hidden");

const themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    document.documentElement.classList[
        localStorage.getItem("theme") === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
            ? "remove"
            : "add"
    ]("dark");
    localStorage.setItem(
        "theme",
        localStorage.getItem("theme") === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
            ? "light"
            : "dark"
    );
});
