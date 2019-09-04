// <!-- WARNING: DATA TABLES SCRIPT -->
  $(document).ready(function() {
    $('#table-1').DataTable({
      responsive: true
    });
  });

  // <!-- WARNING VALIDATE SCRIPT  -->
  function log_user_agent_delete(id) {
    var jvalidate = $("#log_user_agent_delete_"+id).validate({
      ignore: [],
      rules: {
        id: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#log_user_agent_delete_'+id+' .btn').addClass('disabled').text("Deleting");
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            if (response.status == 'ok') {
              $('#log_user_agent_delete_'+id+' .btn').text("DELETED");
              // window.location.href = response.redirect;
            } else
              $('#log_user_agent_delete_'+id+' .btn').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  }
