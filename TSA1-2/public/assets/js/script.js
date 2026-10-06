"use strict";

const navToggle = document.querySelector(".nav-toggle");
const primaryNav = document.querySelector(".primary-nav");

if (navToggle && primaryNav) {
    navToggle.addEventListener("click", () => {
        const isOpen = primaryNav.classList.toggle("is-open");
        navToggle.setAttribute("aria-expanded", String(isOpen));
    });

    primaryNav.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            primaryNav.classList.remove("is-open");
            navToggle.setAttribute("aria-expanded", "false");
        });
    });
}

const year = document.querySelector("#current-year");

if (year) {
    year.textContent = String(new Date().getFullYear());
}

