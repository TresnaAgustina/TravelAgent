const toggle = document.querySelector('.dropBtn');
const menu = document.querySelector('.dropMenu');

toggle.onclick = function () {
      menu.classList.toggle("hidden");
      // menu.classList.add("block");
}

const burger = document.querySelector('.toogleSideNav');
const sideCont = document.querySelector('.sideCont');
const dropIcon = document.querySelector('.dropIcon');

burger.onclick = function () {
      sideCont.classList.toggle('open');
      dropIcon.classList.toggle('show');
}
