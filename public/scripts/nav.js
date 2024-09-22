// hamburger
const hamburger_btn = document.getElementById("hamburger-btn");
const hamburger = document.getElementById("hamburger");
const hamburgerContainer = document.getElementById("hamburger_container");
const overlay = document.getElementById("overlay");

const show = () => {
    hamburger.classList.add("is-show");
    overlay.classList.add("is-show");
    hamburgerContainer.style.display = "flex";
};

const hidden = () => {
    hamburger.classList.remove("is-show");
    overlay.classList.remove("is-show");
    hamburgerContainer.style.display = "none";
};

hamburger_btn.addEventListener("click", () => {
    if (hamburger.classList.contains("is-show")) {
        hidden();
    } else {
        show();
    }
});
overlay.addEventListener('click', () => hidden())

// Links hover effect
const links = document.querySelectorAll(".nav-link");

links.forEach((link) => {
    link.addEventListener("mouseover", (e) => {
        links.forEach((link) => {
            link.style.color = "#e6e6e666";
        });
        e.target.style.color = "#e6e6e6";
    });

    link.addEventListener("mouseout", () => {
        links.forEach((link) => {
            link.style.color = "#e6e6e6";
        });
    });
});
