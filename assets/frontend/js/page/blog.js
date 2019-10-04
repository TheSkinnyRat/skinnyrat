// <!-- WARNING TOOLTIP SCRIPT  -->
function copy(name) {
  var url = document.getElementById("url_" + name);
  url.classList.remove('d-none');

  url.select();
  document.execCommand("copy");
  url.blur();
  document.getSelection().removeAllRanges();

  url.classList.add('d-none');

  var copy_button = document.getElementById('cp_' + name);
  copy_button.innerHTML = '<i class="fas fa-check"></i> Copied';
  copy_button.disabled = false;
}
//<!-- WARNING SHOW COMMENT SCRIPT -->
function show_comment(id) {
  var comment = $('#comment_' + id).attr('aria-label');
  if (comment == 'hide') {
    $('#comment_' + id).removeClass('d-none').attr('aria-label', 'show');
    $('#comment_' + id + ' #comment_input_parent').focus();
  } else {
    $('#comment_' + id).addClass('d-none').attr('aria-label', 'hide');
  }
}
// <!-- WARNING VALIDATE ARTICLE LIKE SCRIPT  -->
var jvalidate = $("#article_like").validate({
  ignore: [],
  rules: {
    id: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    var btn_target = $('#btn_article_like').attr('target');
    if (btn_target == 'like') {
      $('#btn_article_like').attr('target', 'unlike').addClass('text-primary').children('i').removeClass().addClass('fas fa-thumbs-up fa-sm');
    } else {
      $('#btn_article_like').attr('target', 'like').removeClass('text-primary').children('i').removeClass().addClass('far fa-thumbs-up fa-sm');
    }
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        if (response.status == 'ok') {
          $('#text_article_like').text(response.like);
        } else
          alert(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});

// <!-- WARNING VALIDATE ARTICLE DISLIKE SCRIPT  -->
var jvalidate = $("#article_dislike").validate({
  ignore: [],
  rules: {
    id: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    var btn_target = $('#btn_article_dislike').attr('target');
    if (btn_target == 'dislike') {
      $('#btn_article_dislike').attr('target', 'undislike').addClass('text-primary').children('i').removeClass().addClass('fas fa-thumbs-down fa-sm fa-flip-horizontal');
    } else {
      $('#btn_article_dislike').attr('target', 'dislike').removeClass('text-primary').children('i').removeClass().addClass('far fa-thumbs-down fa-sm fa-flip-horizontal');
    }
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        if (response.status == 'ok') {
          $('#text_article_dislike').text(response.dislike);
        } else
          alert(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});

// <!-- WARNING VALIDATE COMMENT ADD SCRIPT  -->
var jvalidate = $("#comment_form").validate({
  ignore: [],
  rules: {
    comment: {
      required: true
    },
    date: {
      required: true
    },
    id_article: {
      required: true
    },
    id_parent: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    $('#comment_form .form-control').attr('readonly', 'true');
    $('#comment_form .btn').addClass('disabled').children('i').removeClass().addClass('fas fa-circle-notch fa-spin');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        if (response.status == 'ok') {
          location.reload();
        } else
          alert(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});

//<!-- WARNING COMMENT ADD PARENT SCRIPT -->
function comment_form_parent(id) {
  var jvalidate = $("#comment_form_parent_" +id).validate({
    ignore: [],
    rules: {
      comment: {
        required: true
      },
      date: {
        required: true
      },
      id_article: {
        required: true
      },
      id_parent: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $('#comment_form_parent_'+id+' .form-control').attr('readonly', 'true');
      $('#comment_form_parent_'+id+' .btn').addClass('disabled').children('i').removeClass().addClass('fas fa-circle-notch fa-spin');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          if (response.status == 'ok') {
            location.reload();
          } else
            alert(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
}

//<!-- WARNING COMMENT DELETE SCRIPT -->
function comment_del(id) {
  $('#comment_del_' + id).text('Menghapus...');
  var jvalidate = $("#comment_form_del_" +id).validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          if (response.status == 'ok') {
            location.reload();
          } else
            alert(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
}

//<!-- WARNING COMMENT LIKE SCRIPT -->
function comment_like(id) {
  var jvalidate = $("#comment_like_" +id).validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      var btn_target = $('#btn_comment_like_' +id).attr('target');
      if (btn_target == 'like') {
        $('#btn_comment_like_' +id).attr('target', 'unlike').addClass('text-primary').children('i').removeClass().addClass('fas fa-thumbs-up fa-sm');
      } else {
        $('#btn_comment_like_' +id).attr('target', 'like').removeClass('text-primary').children('i').removeClass().addClass('far fa-thumbs-up fa-sm');
      }
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          if (response.status == 'ok') {
            $('#text_comment_like_' +id).text(response.like);
          } else
            alert(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
}

//<!-- WARNING COMMENT DISLIKE SCRIPT -->
function comment_dislike(id) {
  var jvalidate = $("#comment_dislike_" +id).validate({
    ignore: [],
    rules: {
      id: {
        required: true
      },
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      var btn_target = $('#btn_comment_dislike_' +id).attr('target');
      if (btn_target == 'dislike') {
        $('#btn_comment_dislike_' +id).attr('target', 'undislike').addClass('text-primary').children('i').removeClass().addClass('fas fa-thumbs-down fa-sm fa-flip-horizontal');
      } else {
        $('#btn_comment_dislike_' +id).attr('target', 'dislike').removeClass('text-primary').children('i').removeClass().addClass('far fa-thumbs-down fa-sm fa-flip-horizontal');
      }
      $.ajax({
        url: target,
        type: 'POST',
        dataType: 'json',
        data: $(form).serialize(),
        success: function(response) {
          if (response.status == 'ok') {
            $('#text_comment_dislike_' +id).text(response.dislike);
          } else
            alert(response.msg);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });
}

var jvalidate = $("#pass_form").validate({
  ignore: [],
  rules: {
    id_article: {
      required: true
    },
    password: {
      required: true
    },
  },
  submitHandler: function(form) {
    var target = $(form).attr('action');
    $('#pass_form .alert-warning').removeClass('d-none');
    $('#pass_form .alert-success').addClass('d-none');
    $('#pass_form .alert-danger').addClass('d-none');
    $('#pass_form .alert-info').addClass('d-none');
    $.ajax({
      url: target,
      type: 'POST',
      dataType: 'json',
      data: $(form).serialize(),
      success: function(response) {
        $('#pass_form .alert-warning').addClass('d-none');
        if (response.status == 'ok') {
          $('#pass_form .alert-success').removeClass('d-none').children('span');
          $('#konten').slideUp("slow", function(){
            $('#konten').html(response.konten).slideDown("slow")
          });
        } else
          $('#pass_form .alert-danger').removeClass('d-none').children('span').text(response.msg);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert(textStatus, errorThrown);
      }
    });
  }
});
