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
      img: {
        required: true
      },
      password: {
        required: true
      },
      private: {
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

  function diseditor() {
    if ( $('#disable_editor').is(':checked') ) {
      $('#editor_cktext').addClass('hidden').children('textarea').prop('disabled', true);
      $('#editor_default').removeClass('hidden').children('textarea').prop('disabled', false);
      $('#preview_konten').html($('#konten').val());
    }else{
      $('#editor_cktext').removeClass('hidden').children('textarea').prop('disabled', false);
      $('#editor_default').addClass('hidden').children('textarea').prop('disabled', true);
      var konten = CKEDITOR.instances.cktext.getData();
      $('#preview_konten').html(konten);
    }
  }

  function show_more(){
    if ($('#show_more').attr('aria-expanded') == "true") {
      $('#show_more').html("<i class='fa fa-angle-down'></i> Lainnya")
    }else{
      $('#show_more').html("<i class='fa fa-angle-up'></i> Lainnya")
    }
  }

  function show_more_img(){
    if ( $('#more_img').is(':checked') ) {
      $('#more_img_input').removeClass('hidden').children('div').children('input').val('');
    }else{
      $('#more_img_input').addClass('hidden').children('div').children('input').val('0');
    }
  }

  function show_more_pass(){
    if ( $('#more_pass').is(':checked') ) {
      $('#more_pass_input').removeClass('hidden').children('div').children('input').val('');
    }else{
      $('#more_pass_input').addClass('hidden').children('div').children('input').val('0');
    }
  }

  function show_more_private(){
    if ( $('#more_private').is(':checked') ) {
      $('#more_private_input').children('div').children('input').val('1');
    }else{
      $('#more_private_input').children('div').children('input').val('0');
    }
  }
