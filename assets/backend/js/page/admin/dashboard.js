 // <!-- WARNING DATE & TIME SCRIPT -->
  window.setTimeout("waktu()", 1000);
  window.setTimeout("tanggal()", 1000);

  function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    var jam;
    var menit;
    var detik;
    jam = waktu.getHours();
    jam = ("0" + jam).slice(-2);
    menit = waktu.getMinutes();
    menit = ("0" + menit).slice(-2);
    detik = waktu.getSeconds();
    detik = ("0" + detik).slice(-2);
    document.getElementById("jam").innerHTML = jam;
    document.getElementById("menit").innerHTML = menit;
    document.getElementById("detik").innerHTML = detik;
    // document.getElementById("milidetik").innerHTML = waktu.getMilliseconds();
  }

function tanggal(){
  setTimeout("tanggal()", 1000);
  var tanggallengkap = new String();
  var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
  namahari = namahari.split(" ");
  var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
  namabulan = namabulan.split(" ");
  var tgl = new Date();
  var hari = tgl.getDay();
  var tanggal = tgl.getDate();
  var bulan = tgl.getMonth();
  var tahun = tgl.getFullYear();
  tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
  document.getElementById("tanggal").innerHTML = tanggallengkap;
}

// WARNING COUNTER ANIMATION SCRIPT
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
