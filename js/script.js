// Collapsible menus in front page
$(document).ready(function(){
  $('.collapsible').collapsible();
});

// Modal in menu items
$(document).ready(function(){
  $('.modal').modal();
});

// Image expand in menus
$(document).ready(function(){
  $('.materialboxed').materialbox();
});

// Gallery
var mb = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(mb,{

      })


// Sidenav
$(document).ready(function(){
  $('.sidenav').sidenav();
});
      