// <!-- WARNING VALIDATE SCRIPT  -->
var jvalidate = $("#admin_form").validate({
  ignore: [],
  rules: {
    username: {
      required: true
    },
    password: {
      required: true
    },
    name: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    $('#admin_form .alert-warning').removeClass('hidden');
    $('#admin_form .alert-success').addClass('hidden');
    $('#admin_form .alert-danger').addClass('hidden');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#admin_form .alert-warning').addClass('hidden');
        if (response.status == 'ok') {
          $('#admin_form .alert-success').removeClass('hidden').children('span').text(response.msg);
          window.location.href = response.redirect;
        } else
          $('#admin_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});
