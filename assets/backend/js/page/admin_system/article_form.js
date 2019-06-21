// <!-- WARNING VALIDATE SCRIPT  -->
  var jvalidate = $("#article_form").validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
      name: {
        required: true
      },
      judul: {
        required: true
      },
      subjudul: {
        required: true
      },
      konten: {
        required: function(){
          CKEDITOR.instances.cktext.updateElement();
          },
      },
      date_created: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#article_form .alert-warning').removeClass('hidden');
      $('#article_form .alert-success').addClass('hidden');
      $('#article_form .alert-danger').addClass('hidden');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          $('#article_form .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#article_form .alert-success').removeClass('hidden').children('span').text(response.msg);
            window.location.href = response.redirect;
          } else
            $('#article_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
