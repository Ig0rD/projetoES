let menu = document.querySelector(".menuBtn");

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, {});
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, {});
});
$(document).ready(function () {
  $('.slider').slider({
    indicators: false,
    interval: 5000,
    height: 350
  });
});
$(document).ready(function () {
  $('.carousel').carousel();
});
$(document).ready(function () {
  $('.materialboxed').materialbox();
});
$(document).ready(function () {
  $('.sidenav').sidenav({
    draggable: true,
  });
});