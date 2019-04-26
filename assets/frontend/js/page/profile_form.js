// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#profile_form").validate({
    ignore: [],
    rules: {
      name: {
        required: true
      },
      username: {
        required: true
      },
      check_password: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#profile_form .alert-warning').removeClass('d-none');
      $('#profile_form .alert-success').addClass('d-none');
      $('#profile_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#profile_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#profile_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#profile_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
