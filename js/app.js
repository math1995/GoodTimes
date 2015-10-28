$(document).ready(function() {

  $('#hamb').click( function() {
  
    $(this).toggleClass('animate');
    
  });

 
  $(".slider").owlCarousel({
 
      navigation : true,
      transitionStyle:"fade",
      autoPlay : 3000,
      stopOnHover : true,
      goToFirstSpeed : 2000,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  })
 
});