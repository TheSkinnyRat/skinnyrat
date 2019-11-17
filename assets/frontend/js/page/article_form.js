// <!-- WARNING VALIDATE SCRIPT  -->
var jvalidate = $("#article_form").validate({
  ignore: [],
  rules: {
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
      required: true, function() {
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
    $('#article_form .alert-warning').removeClass('d-none');
    $('#article_form .alert-success').addClass('d-none');
    $('#article_form .alert-danger').addClass('d-none');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#article_form .alert-warning').addClass('d-none');
        if (response.status == 'ok') {
          $('#article_form .alert-success').removeClass('d-none').children('span').text(response.msg);
          window.location.href = response.redirect;
        } else
          $('#article_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $('#article_form .alert-warning').addClass('d-none');
        $('#article_form .alert-danger').removeClass('d-none').children('span').text("Anda belum login / sesi anda sudah habis. Error: " + textStatus, errorThrown);
      }
    });
  }
});

function diseditor() {
  if ( $('#disable_editor').is(':checked') ) {
    $('#editor_cktext').addClass('d-none').children('textarea').prop('disabled', true);
    $('#editor_default').removeClass('d-none').children('textarea').prop('disabled', false);
    $('#preview_konten').html($('#konten').val());
  }else{
    $('#editor_cktext').removeClass('d-none').children('textarea').prop('disabled', false);
    $('#editor_default').addClass('d-none').children('textarea').prop('disabled', true);
    var konten = CKEDITOR.instances.cktext.getData();
    $('#preview_konten').html(konten);
  }
}

CKEDITOR.replace( 'cktext', {
    on: {
        change: function() {
            var konten = CKEDITOR.instances.cktext.getData();
            $('#preview_konten').html(konten);
        }
    }
} );

function preview(type){
  if (type == "judul") {
    $('#preview_judul').html($('#judul').val());
  }else if (type == "subjudul") {
    $('#preview_subjudul').html($('#subjudul').val());
  }else if (type == "konten_default") {
    $('#preview_konten').html($('#konten').val());
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
    $('#more_img_input').removeClass('d-none').children('div').children('input').val('');
  }else{
    $('#more_img_input').addClass('d-none').children('div').children('input').val('0');
  }
}

function show_more_pass(){
  if ( $('#more_pass').is(':checked') ) {
    $('#more_pass_input').removeClass('d-none').children('div').children('input').val('');
  }else{
    $('#more_pass_input').addClass('d-none').children('div').children('input').val('0');
  }
}

function show_more_private(){
  if ( $('#more_private').is(':checked') ) {
    $('#more_private_input').children('div').children('input').val('1');
  }else{
    $('#more_private_input').children('div').children('input').val('0');
  }
}

// ClassicEditor
//   .create(document.querySelector('#cktext'), {
//     toolbar: ['heading','|','undo','redo','|','bold','italic','blockQuote',"link", "numberedList", "bulletedList", "mediaEmbed", "insertTable", "tableColumn", "tableRow", "mergeTableCells"],
//     removePlugins: [''],
//     })
//
//   .then( editor => {
//         console.log( Array.from( editor.ui.componentFactory.names() ) );
//     } )
//   .catch(error => {
//     console.error(error);
//   });
