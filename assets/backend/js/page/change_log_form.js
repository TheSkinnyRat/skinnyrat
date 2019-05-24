// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#change_log_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      judul: {
        required: true
      },
      konten: {
        required: function(){
          CKEDITOR.instances.cktext.updateElement();
          },
      },
      expand: {
        required: true
      },
      status: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#change_log_form .alert-warning').removeClass('hidden');
      $('#change_log_form .alert-success').addClass('hidden');
      $('#change_log_form .alert-danger').addClass('hidden');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#change_log_form .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#change_log_form .alert-success').removeClass('hidden').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#change_log_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
