// <!-- WARNING START SCRIPT  -->
function copy(name) {
  var url = document.getElementById("url_"+name);
  url.classList.remove('d-none');

  url.select();
  document.execCommand("copy");
  url.blur();
  document.getSelection().removeAllRanges();

  url.classList.add('d-none');

  var copy_button = document.getElementById('cp_'+name);
  copy_button.innerHTML = '<i class="fas fa-check"></i> Copied';
  copy_button.disabled = false;
}
