
// Sidebar
$(function () {
  'use strict'
  $('[data-toggle="offcanvas"]').on('click', function () {
    $('#navbarsidebar').toggleClass('open');
    $('body').toggleClass('sidebaropen');
  })
})

// Filter
$(function () {
  'use strict'
  $('[data-toggle="filterMenu"]').on('click', function () {
    $('#filterMenu').toggleClass('open');
    $('body').toggleClass('filtersidebaropen');
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

$('.account-nav .nav-link').on('click', function(e) {
    // $('.collapseAccountNav').removeClass('show');
    $(".collapseAccountNav").collapse('hide')
});    


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


// $(document).ready(function() {
//    $('input[type="radio"]').click(function() {
//        if($(this).attr('id') == 'otherstag') {
//             $('#collapseOthers').show();           
//        }
//        else {
//             $('#collapseOthers').hide();   
//        }
//    });
// });


// $(document).ready(function(){
//     $('#otherstag').click(function(){
       
//     });
// });
$(document).ready(function() {
    $("input[name$='tags']").click(function() {
        var fieldval = $(this).val();

        $("#collapseothers").hide();
        $("#collapse" + fieldval).show();
    });
});


$('#myList a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})



// $('#hometag,#officetag,#otherstag').on('click', function (e) {
//     e.stopPropagation();
//     if (this.id == 'collapseOthers') {
//         $('#collapseTwoPanel').collapse('hide');
//         $('#collapseThreePanel').collapse('hide');
//         $('#collapseOnePanel').collapse('show');
//     } else if (this.id == 'collapseTwo') {
//         $('#collapseOnePanel').collapse('hide');
//         $('#collapseThreePanel').collapse('hide');
//         $('#collapseTwoPanel').collapse('show');
//     } else if (this.id == 'collapseThree') {
//         $('#collapseOnePanel').collapse('hide');
//         $('#collapseTwoPanel').collapse('hide');
//         $('#collapseThreePanel').collapse('show');
//     }
// })