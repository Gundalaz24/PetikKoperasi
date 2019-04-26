<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Koperasi PeTIK</title>
	<!-- css link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/input_transaksi.css")?>">
	<!-- icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- js link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- title -->
	<link rel="shortcut icon" href="<?php echo base_url("uploads/image/title.jpg")?>">
</head>
<body>
	<!-- NAV -->
<div class="headerLogo">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="col-12-fluid">
    	
    	<a href="<?php echo base_url("")?>koperasi_petik"><img class="logoo" src="<?php echo base_url("uploads/image/Logo.png")?>"></a>
    	</div>
    </div>
  </div>
</nav>


<div class="container-fluid">
	<div class="row row-no-gutters">
		<div class="col-md-2">
<!-- sidebar -->
<div id="mySidenav" class="sidenav">
	<ul type="bullet">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<li><a href="#">TRANSAKSI</a></li>
	<li><a href="#">KETERANGAN INVESTASI</a></li>
	<li><a href="#">KETERANGAN PINJAMAN</a></li>
	<li><a href="#">BELANJA</a></li>
  </ul>
</div>

<span class="openbtn" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</div>
<!-- content -->

<div class="col-md-10">
<form>
<h1>INPUT TRANSAKSI</h1>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nama</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option></option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Barang</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option></option>
    </select>
  </div>

     
  <div class="form-group">
  	<label class="control-label" for="date">Tanggal Transaksi</label>
      <input type="date" name="tgl" id="tgl" class="form-control"
      placeholder="yyyy-mm-dd">
  </div>
     
  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Total Harga</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group"> 
        <button class="btn" name="submit" type="submit">Submit</button>
      </div>
     </form>
</form>
</div>
	
	</div>
</div>



</body>
</html>