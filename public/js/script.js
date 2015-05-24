(function() {

  $.material.init()

  $(".card-shop").mouseenter(function(event) {
    $(this).addClass('shadow-z-2');
  }).mouseleave(function(event) {
    $(this).removeClass('shadow-z-2');
  });

})();