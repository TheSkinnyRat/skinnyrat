// <!-- WARNING VALIDATE SCRIPT  -->
var jvalidate = $("#web_alert_form").validate({
  ignore: [],
  rules: {
    style: {
      required: true
    },
    konten: {
      required: true
    },
    status: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    $('#web_alert_form .alert-warning').removeClass('hidden');
    $('#web_alert_form .alert-success').addClass('hidden');
    $('#web_alert_form .alert-danger').addClass('hidden');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#web_alert_form .alert-warning').addClass('hidden');
        if (response.status == 'ok') {
          $('#web_alert_form .alert-success').removeClass('hidden').children('span').text(response.msg);
          window.location.href = response.redirect;
        } else
          $('#web_alert_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});
