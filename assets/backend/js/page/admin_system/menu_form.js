// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#menu_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      name: {
        required: true
      },
      target: {
        required: true
      },
      id_parent: {
        required: true
      },
      icon: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#menu_form .alert-warning').removeClass('hidden');
      $('#menu_form .alert-success').addClass('hidden');
      $('#menu_form .alert-danger').addClass('hidden');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#menu_form .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#menu_form .alert-success').removeClass('hidden').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#menu_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
