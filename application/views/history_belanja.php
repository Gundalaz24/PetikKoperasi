<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Koperasi PeTIK</title>
	<!-- boostrap link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/history_transaksi.css")?>">
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
<div class="sidebar">
	<ul type="bullet">
	<li><a href="<?php base_url()?>produk">PRODUK</a></li>
  <li><a href="<?php base_url()?>history_tran">TRANSAKSI</a></li>
  <li><a href="<?php base_url()?>anggota">ANGGOTA</a></li>
	<li><a href="#">KETERANGAN INVESTASI</a></li>
	<li><a href="#">KETERANGAN PINJAMAN</a></li>
	<li class="active"><a href="<?php base_url()?>history_bel">BELANJA</a></li>
  </ul>
</div>

</div>

<!-- content -->
<form>
<h1>HISTORY BELANJA</h1>
<?php if($this->session->flashdata('flash') ) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Belanja <strong>Berhasil</strong> 
  <?php echo $this->session->flashdata('flash');?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
<?php endif; ?>

  <table class="table table-hover">
  <thead>
    <tr class="headtab">
      <th scope="col">ID</th>
      <th scope="col">Barang</th>
      <th scope="col">Tanggal Belanja</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total Belanja</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $count = 1;?>
    <?php foreach($data as $value){ ?>
    <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $value->nama_barang ?></td>
      <td><?php echo $value->tanggal_belanja ?></td>
      <td><?php echo $value->jumlah ?></td>
      <td></td>
      <td class="aksi">
        <a href="<?php echo base_url() ?>history_bel/edit" class="fa fa-edit btn btn-info"></a>
        <?php echo anchor('history_bel/hapus/'.$value->id_belanja,'<i class="fa fa-trash btn btn-danger" aria-hidden="true"></i>'); ?>
      </td>
    </tr>
    <?php $count++ ?>
    <?php } ?>
  </tbody>
</table>
</form>
	
	</div>
</div>



</body>
</html>