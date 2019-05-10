<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Koperasi PeTIK</title>
	<!-- boostrap link -->
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
	<li class="active"><a href="<?php base_url()?>input_tran">TRANSAKSI</a></li>
	<li><a href="<?php base_url()?>input_sim">KETERANGAN INVESTASI</a></li>
	<li><a href="<?php base_url()?>input_pin">KETERANGAN PINJAMAN</a></li>
	<li><a href="<?php base_url()?>input_bel">BELANJA</a></li>
  </ul>
</div>

</div>
<!-- content -->

<form method="POST" action="">
<h1>INPUT TRANSAKSI</h1>
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
    <label for="exampleFormControlSelect1">Nama Anggota</label>
    <select class="form-control" name="anggota" id="anggota">
    </select>
  </div>
  <div class="form-group">
  <label for="jenis_barang">Barang</label>
  <select class="form-control" name="jenis_barang" id="jenis_barang">
  </select>
  </div>  
  <div class="form-group">
  <label for="harga_barang">Harga</label>
  <input type="text" class="form-control" name="harga_barang" id="harga_barang" readonly>
  </div>
  <div class="form-group">
  <label for="jumlah_barang">Jumlah</label>
  <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang"  placeholder="masukan jumlah barang yang ingin dibeli">
  </div>

  <div class="form-group">
  <label for="total_belanja">Total belanja</label>
  <input type="text" class="form-control" name="total_belanja" id="total_belanja" readonly>
  </div>
  <div class="form-group"> 
        <button class="btn" name="submit" type="submit">Input</button>
   </div>
</form>
	
	</div>
</div>

<script type="text/javascript"> 
      var string = "";
      var result = <?php echo $data_anggota ?>;
      // console.log(result);

      var anggota = document.getElementById("anggota");

      string += "<option disabled selected> Pilih Anggota </option>";

      for(value in result){
        string += "<option>"+ result[value].nama_anggota +"</option>";
      }
      
      anggota.innerHTML = string;
      
      // jenis_barang.addEventListener('change', (event) => {
      //   harga_barang.value = result[jenis_barang.selectedIndex-1].harga_barang;
      // });

      // jumlah_barang.addEventListener('change', (event) =>{
      //   total_belanja.value = jumlah_barang.value * harga_barang.value;
      // });
        
  </script> 
<script type="text/javascript"> 
      var string = "";
      var result = <?php echo $data_barang ?>;
      // console.log(result);
        
      var jenis_barang = document.getElementById("jenis_barang");
      var harga_barang = document.getElementById("harga_barang");
      var jumlah_barang = document.getElementById("jumlah_barang");
      var total_belanja = document.getElementById("total_belanja");

      string += "<option disabled selected> Pilih Barang </option>";

      for(value in result){
        string += "<option>"+ result[value].nama_barang +"</option>";
      }
      
      jenis_barang.innerHTML = string;
      
      jenis_barang.addEventListener('change', (event) => {
        harga_barang.value = result[jenis_barang.selectedIndex-1].harga_barang;
      });

      jumlah_barang.addEventListener('change', (event) =>{
        total_belanja.value = jumlah_barang.value * harga_barang.value;
      });
        
  </script> 


</body>
</html>