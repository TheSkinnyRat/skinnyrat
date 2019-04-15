// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#register_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      name: {
        required: true
      },
      username: {
        required: true
      },
      password: {
        required: true
      },
      re_password: {
        required: true,
        equalTo: '#password'
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#register_form .alert-warning').removeClass('d-none');
      $('#register_form .alert-success').addClass('d-none');
      $('#register_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#register_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#register_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#register_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
