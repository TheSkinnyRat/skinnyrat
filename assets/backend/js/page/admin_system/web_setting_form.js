// <!-- WARNING VALIDATE SCRIPT  -->
var jvalidate = $("#web_setting_form").validate({
  ignore: [],
  rules: {
    title: {
      required: true
    },
    name: {
      required: true
    },
    version: {
      required: true
    },
    icon: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    $('#web_setting_form .alert-warning').removeClass('hidden');
    $('#web_setting_form .alert-success').addClass('hidden');
    $('#web_setting_form .alert-danger').addClass('hidden');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#web_setting_form .alert-warning').addClass('hidden');
        if (response.status == 'ok') {
          $('#web_setting_form .alert-success').removeClass('hidden').children('span').text(response.msg);
          window.location.href = response.redirect;
        } else
          $('#web_setting_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});

$("#file-upload").fileupload({
  dataType: 'text',
  autoUpload: false,
  acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
  maxFileSize: 5000000 // 5 MB
  }).on('fileuploadadd', function(e, data) {
    data.process();
  }).on('fileuploadprocessalways', function (e, data) {
  if (data.files.error) {
    data.abort();
    alert('Image file must be jpeg/jpg, png or gif with less than 5MB');
  } else {
    data.submit();
  }
  }).on('fileuploadprogressall', function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    var target = $('#target-file').val();
//			$('#px-site-content-'+target+'-form-file-upload-progress').text('Upload Progress '+progress+'%');
    $('#px-web-setting-form-fileupload-'+target+'-progress').text(progress+'%');
    $('#px-web-setting-form-fileupload-'+target+'-upload-button').attr('disabled',true);
  }).on('fileuploaddone', function (e, data) {
    var target = $('#target-file').val();
    $('#px-web-setting-form-fileupload-'+target+'-upload-button').removeAttr('disabled');
    $('#preview_'+target+' a').attr('href',data.result);
    $('#preview_'+target+' img').attr('src',data.result);
    $('[name="'+target+'"]').val(data.result);
//			var preview_template = '<div class="per-preview-document">'
//										+'<input class="form-control" type="hidden" name="document[]" value="'+data.result+'">'
//										+'<i class="fa fa-file-o"></i> <span>'+baseName(data.result)+'</span>'
//										+'<a href="'+data.result+'"><i class="fa fa-download btn-download" title="Download"></i></a>'
//										+'<i class="fa fa-times btn-delete-file" title="Delete"></i>'
//									+'</div>';
//			$('#preview-'+target).append(preview_template);
  }).on('fileuploadfail', function (e, data) {
    alert('File upload failed.');
    $('#px-web-setting-form-fileupload-upload-button').removeAttr('disabled');
  }).on('fileuploadalways', function() {
});
$('.btn-upload').click(function(){
  var target = $(this).attr('data-target');
  var old_temp = $('[name="'+target+'"]').val();
  $('#file-upload #target-file').val(target);
  $('#file-upload #old-file').val(old_temp);
})
