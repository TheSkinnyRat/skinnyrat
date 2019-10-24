//<!-- WARNING SCRIPT ------------------------- -->
  var use_pass = document.getElementById('use_pass');
  var input_pass = document.getElementById('input_pass');
  var form_pass = document.getElementById('form_pass');

  function pass() {
    if (use_pass.checked == true) {
      input_pass.classList.remove('d-none');
      form_pass.required = true;
      form_pass.value = '';
    }else{
      input_pass.classList.add('d-none');
      form_pass.required = false;
      form_pass.value = '0';
    }
  }

// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#shorten_url_form").validate({
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
      safelink: {
        required: true
      },
      date_created: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#shorten_url_form .alert-warning').removeClass('d-none');
      $('#shorten_url_form .alert-success').addClass('d-none');
      $('#shorten_url_form .alert-danger').addClass('d-none');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#shorten_url_form .alert-warning').addClass('d-none');
          if (response.status == 'ok') {
            $('#shorten_url_form .alert-success').removeClass('d-none').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#shorten_url_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });

  function show_more_safelink(){
    if ( $('#more_safelink').is(':checked') ) {
      $('#more_safelink_input').children('div').children('input').val('1');
    }else{
      $('#more_safelink_input').children('div').children('input').val('0');
    }
  }
