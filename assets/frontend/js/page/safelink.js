// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#pass_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      name: {
        required: true
      },
      link: {
        required: true
      },
      date_created: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#pass_form .alert-warning').removeClass('d-none');
      $('#pass_form .alert-success').addClass('d-none');
      $('#pass_form .alert-danger').addClass('d-none');
      $('#pass_form .alert-info').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#pass_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#pass_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#pass_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
