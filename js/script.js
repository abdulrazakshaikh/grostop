
// Sidebar
$(function () {
  'use strict'
  $('[data-toggle="offcanvas"]').on('click', function () {
    $('#navbarsidebar').toggleClass('open');
    $('body').toggleClass('sidebaropen');
  })
})

// Mega Dropdown Animated
$('.dropdown').on('show.bs.dropdown', function(e) {
    $(this).find('.dropdown-menu').first().stop(!0, !0).slideDown(300)
});
$('.dropdown').on('hide.bs.dropdown', function(e) {
    $(this).find('.dropdown-menu').first().stop(!0, !0).slideUp(200)
});

// Hamburger Icon Animated
// $('.navbar .navbar-toggler').on('click', function(e) {
//         $(this).toggleClass('active')
// });    


function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}