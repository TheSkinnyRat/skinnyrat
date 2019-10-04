// <!-- WARNING CHANGE DEFAULT VALIDATE SCRIPT  -->
jQuery.validator.setDefaults({
  errorElement: 'span',
  errorClass: 'invalid-feedback',
  errorPlacement: function(error, element) {
    element.closest('.form-group').append(error);
  },
  highlight: function(element, errorClass, validClass) {
    $(element).addClass('is-invalid');
  },
  unhighlight: function(element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
  }
});
// <!-- WARNING TOOLTIP SCRIPT  -->
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})

// <!-- WARNING DATE & TIME SCRIPT -->
window.setTimeout("time()", 1000);

function time() {
  var time = new Date();
  setTimeout("time()", 1000);
  var hour;
  var minute;
  var second;
  hour = time.getHours();
  hour = ("0" + hour).slice(-2);
  minute = time.getMinutes();
  minute = ("0" + minute).slice(-2);
  second = time.getSeconds();
  second = ("0" + second).slice(-2);
  // document.getElementById("hour").innerHTML = hour;
  // document.getElementById("hour-1").innerHTML = hour;
  // document.getElementById("minute").innerHTML = minute;
  // document.getElementById("minute-1").innerHTML = minute;
  // document.getElementById("second").innerHTML = second;
  // document.getElementById("second-1").innerHTML = second;
  // document.getElementById("milisecond").innerHTML = time.getMilliseconds();
}

setInterval(function() {
  if ($(".blink-1s").text() == ':') {
    $(".blink-1s").text('󠀠󠀠󠀠󠀠.');
  } else {
    $(".blink-1s").text(':');
  }
}, 1000);

$(window).on('load',function() {
  $('#place_load').fadeOut("fast", function() {
    $('#main_content').css('visibility','visible').hide().fadeIn();
  });
});
