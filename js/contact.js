jQuery(document).ready(function($) {
  function timeFormat(data){
  var H = +data.substr(0, 2);
  var h = H % 12 || 12;
  var ampm = (H < 12 || H === 24) ? "AM" : "PM";
  data = h + data.substr(2, 3) + ampm;
  return data
  }
  jQuery("#contactSubmit").on("click", function(e) {
    e.preventDefault();
    var recaptcha = $(".g-recaptcha-response").val();
    var name = $('[name="name"]').val();
    var telephone = $('[name="telephone"]').val();
    var email = $('[name="email"]').val();
    var date  = $('[name="date"]').val();
    var time = $('[name="time"]').val();
    var message = $('[name="message"]').val();
    var array = [recaptcha, name, telephone, email, date, time, message];
    var error = false;
    for (var i = 0; i < array.length; i++) {
      if (array[i] == ""){
        var error = true;
        break
      }
    }
    if (error == true){
      $(".error").fadeIn()
    }
    else {
    var data = {
    action: 'mail_before_submit',
     "g-recaptcha-response": recaptcha,
      "name": name,
      "telephone": telephone,
      "email": email,
      "date": date,
      "time": timeFormat(time),
      "message": message,
      _ajax_nonce: $('#my_email_ajax_nonce').data('nonce'),
      };
      jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(data) {
      debugger
      if (data == "error"){
          alert("error")
        }
        else {
          $(".error").hide()
          $(".thank").fadeIn("fast");
        }
      });
    }
  });
});