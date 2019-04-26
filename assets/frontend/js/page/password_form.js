// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#password_form").validate({
    ignore: [],
    rules: {
      password: {
        required: true
      },
      re_password: {
        required: true,
        equalTo: '#password'
      },
      old_password: {
        required: true,
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#password_form .alert-warning').removeClass('d-none');
      $('#password_form .alert-success').addClass('d-none');
      $('#password_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#password_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#password_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#password_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
