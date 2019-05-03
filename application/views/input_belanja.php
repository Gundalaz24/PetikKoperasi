<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Koperasi PeTIK</title>
	<!-- boostrap link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/input_belanja.css")?>">
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
	<li><a href="<?php base_url()?>input_tran">TRANSAKSI</a></li>
	<li><a href="">KETERANGAN INVESTASI</a></li>
	<li><a href="">KETERANGAN PINJAMAN</a></li>
	<li class="active"><a href="<?php base_url()?>input_bel">BELANJA</a></li>
  </ul>
</div>

</div>
<!-- content -->

<form method="POST" action="<?php base_url()?>input_bel">
<h1>INPUT BELANJA</h1>
<?php if (validation_errors() ) : ?>
  <div class="alert alert-danger" role="alert">
 <?php echo validation_errors() ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('flash') ) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Belanja <strong>Berhasil</strong> 
  <?php echo $this->session->flashdata('flash');?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
<?php endif; ?>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Barang</label>
    <select class="form-control" name="barang_id">
      <option  disabled selected>Pilih Barang</option>
      <?php foreach($data as $value){ ?>
      <option value="<?php echo $value->id_barang?>"><?php echo $value->nama_barang?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah</label>
    <input type="text" class="form-control" name="jumlah">  
  </div>
   <div class="form-group">
    <label class="control-label" for="date">Tanggal Belanja</label>
      <input type="date" name="tanggal" class="form-control"
      placeholder="yyyy-mm-dd">
  </div>   
  <div class="form-group">
    <label for="exampleFormControlInput1">Total Belanja</label>
    <input type="text" class="form-control" name="total_belanja" readonly
    value="5000">
  </div>
  <div class="form-group"> 
      <button class="btn" name="tambah" type="submit">Input</button>
   </div>
</form>
	
	</div>
</div>



</body>
</html>