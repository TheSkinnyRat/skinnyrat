// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#login_form").validate({
    ignore: [],
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#login_form .alert-warning').removeClass('d-none');
      $('#login_form .alert-success').addClass('d-none');
      $('#login_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#login_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#login_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#login_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
