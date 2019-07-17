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
      required: function() {
        CKEDITOR.instances.cktext.updateElement();
      },
    },
    date_created: {
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
        alert(textStatus, errorThrown);
      }
    });
  }
});

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
