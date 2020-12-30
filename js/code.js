
$(document).ready(function(){
    

// Navigationbar
$('.sidenav').sidenav();


// Parallax Section
$('.parallax').parallax();
  
  
// Imageslider

$('.slider').slider();


// Login Toggle Button

$('.toggleBtn').click(function (e){
    e.preventDefault();
    console.log('toggle');
    $('.logForm').toggle();
});
//  $('.subBtn').submit(function(e){
//      e.preventDefault();
//  });
  
  
});