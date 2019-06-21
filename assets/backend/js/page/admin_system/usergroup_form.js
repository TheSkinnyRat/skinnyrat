// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#usergroup_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      usergroup_name: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#usergroup_form .alert-warning').removeClass('hidden');
      $('#usergroup_form .alert-success').addClass('hidden');
      $('#usergroup_form .alert-danger').addClass('hidden');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#usergroup_form .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#usergroup_form .alert-success').removeClass('hidden').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#usergroup_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
