const open = document.getElementById("open-menu");
const close = document.getElementById("close-menu");
const menu = document.getElementById("menu-portfolio-menu");

open.addEventListener("click", () => {
  menu.classList.add("mobile-menu");
  open.classList.add("hide");
  close.classList.add("show");
});

close.addEventListener("click", () => {
  menu.classList.remove("mobile-menu");
  open.classList.remove("hide");
  close.classList.remove("show");
});
