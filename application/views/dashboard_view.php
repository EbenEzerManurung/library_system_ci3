<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-wrapper">

<section class="content-header">
<h1>
Dashboard  
</h1>

<style>
div.b {
text-align: right;

}
</style>



<div class="b">
<script type='text/javascript'>
<!--
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var thisDay = date.getDay(),
thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
//-->
</script>   

<div id="clock"></div>
<script type="text/javascript">
<!--
function showTime() {
var a_p = "";
var today = new Date();
var curr_hour = today.getHours();
var curr_minute = today.getMinutes();
var curr_second = today.getSeconds();
if (curr_hour < 12) {
a_p = "W.I.B";
} else {
a_p = "W.I.B";
}
if (curr_hour == 0) {
curr_hour = 0;
}
if (curr_hour > 24) {
curr_hour = curr_hour - 24;
}
curr_hour = checkTime(curr_hour);
curr_minute = checkTime(curr_minute);
curr_second = checkTime(curr_second);
document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
}

function checkTime(i) {
if (i < 10) {
i = "0" + i;
}
return i;
}
setInterval(showTime, 500);
//-->
</script>
<br>

</section>
<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-sm-12">
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-blue">
<div class="inner">
<h3><?= $count_pengguna;?></h3>

<p>Anggota</p>
</div>
<div class="icon">
<i class="fa fa-user"></i>
</div>
<a href="user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
<!--small box-->
<div class="small-box bg-yellow">
<div class="inner">
<h3><?= $count_buku;?></h3>

<p>Jenis Buku</p>
</div>
<div class="icon">
<i class="fa fa-book"></i>
</div>
<a href="data" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div> 

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-lime">
<div class="inner">
<h3><?= $count_pinjam;?></h3>

<p>Pinjam Buku</p>
</div>
<div class="icon">
<i class="fa fa-address-book"></i>
</div>
<a href="transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-navy">
<div class="inner">
<h3><?= $count_kembali;?></h3>

<p>Buku Kembalikan</p>
</div>
<div class="icon">
<i class="fa fa-solid fa-clipboard"></i>
</div>
<a href="transaksi/kembali" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>
</section>
</div>
<!-- /.content -->
