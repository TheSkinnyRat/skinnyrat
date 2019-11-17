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

// PLACEHOLDER LOADING
$(window).on('load',function() {
  if ($('#place_load').is(':visible')) {
    $('#place_load').fadeOut("fast", function() {
      $('#main_content').css('visibility','visible').hide().fadeIn();
    });
  }
});

setTimeout(function(){
  if ($('#place_load').is(':visible')) {
    $('#place_load').fadeOut("fast", function() {
      $('#main_content').css('visibility','visible').hide().fadeIn();
    });
  }
}, 3000);

// SHOW MORE FUNCTION
function show_more(target_show){
  var jvalidate = $("#"+target_show+"_form").validate({
    submitHandler: function(form) {
      var target = $(form).attr('action');
      var last = $("#"+target_show+"_form input[name='last']").val();
      var limit = $("#"+target_show+"_form input[name='limit']").val();
      $('#'+target_show+'_form .btn').html('<i class="fa fa-circle-notch fa-spin"></i> Loading...').prop('disabled', true);
      $.ajax({
        url: target,
        type: 'GET',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          var data = "";
          data += "<div style='display: none'>";
          for (i = 0; i < response.row; i++) {
            data
            += "<a href='" + response.data[i].a_href + "' class='text-secondary  mb-1'>"
            + "<div class='row p-1 m-1 align-items-center card-body'>"
            + "<div class='col-auto pr-0' style='min-height: 72px'>"
            + "<img src='" + response.data[i].img_src + "' alt='' class='rounded' width='72' height='72'>"
            + "</div>"
            + "<div class='col'>"
            + response.data[i].judul
            + (response.data[i].new == 'yes' ? " <span class='badge badge-secondary'>New</span>" : "")
            + "</div>"
            + "</div>"
            + "</a>"
            + "<hr class='m-0'>";
          }
          data += "</div>";
          $(data).appendTo('#'+target_show).slideDown();
          $("#"+target_show+"_form input[name='last']").val(parseInt(last) + parseInt(limit));
          $('#'+target_show+'_form .btn').html('<i class="fa fa-angle-down"></i> Lainnya').prop('disabled', false);
          if (response.data == '') {
            $('#'+target_show+'_form .btn').html("-- You're at the end --").prop('disabled', true);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
}
