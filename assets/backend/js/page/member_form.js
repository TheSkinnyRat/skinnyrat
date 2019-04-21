// <!-- WARNING VALIDATE SCRIPT  -->
var jvalidate = $("#member_form").validate({
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
    $('#member_form .alert-warning').removeClass('hidden');
    $('#member_form .alert-success').addClass('hidden');
    $('#member_form .alert-danger').addClass('hidden');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#member_form .alert-warning').addClass('hidden');
        if (response.status == 'ok') {
          $('#member_form .alert-success').removeClass('hidden').children('span').text(response.msg);
          window.location.href = response.redirect;
        } else
          $('#member_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});
