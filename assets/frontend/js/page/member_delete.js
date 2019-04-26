// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#member_delete").validate({
    ignore: [],
    rules: {
      password: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#member_delete .alert-warning').removeClass('d-none');
      $('#member_delete .alert-success').addClass('d-none');
      $('#member_delete .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#member_delete .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#member_delete .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#member_delete .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
