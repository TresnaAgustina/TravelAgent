// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
      if (!event.target.matches('.menu__btn')) {
            var dropdowns = document.getElementsByClassName("menu__group");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                  }
            }
      }
}