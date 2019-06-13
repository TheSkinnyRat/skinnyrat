// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#wa_cws_form").validate({
    ignore: [],
    rules: {
      no_wa: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#wa_cws_form .alert-warning').removeClass('d-none');
      $('#wa_cws_form .alert-success').addClass('d-none');
      $('#wa_cws_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#wa_cws_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#wa_cws_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#wa_cws_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
