jQuery(document).ready(function($) {
  $(".contact").prop('type', 'time');
  $(".cancel").on("click", function(){
    var vary= $(".wpcf7-form-control-wrap input, .wpcf7-form-control-wrap textarea")
    for (var i = 0; i < vary.length; i++) {
      $(vary[i]).val('')
    }
  })


})
