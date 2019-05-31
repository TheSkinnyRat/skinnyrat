// <!-- WARNING START SCRIPT  -->
function copy() {
  document.getElementById("d").select();
  document.execCommand("copy");
  document.getElementById("d").blur();
  document.getSelection().removeAllRanges();

  var copy_button = document.getElementById('copy_button');
  copy_button.innerHTML = '<i class="fas fa-check"></i> Copied';
  copy_button.disabled = true;
}
