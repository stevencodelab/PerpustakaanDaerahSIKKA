<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>
<div class="content-wrapper">
<section class="content-header">
  <h1>
    DASHBOARD <small>SISTEM PERPUSTAKAAN UMUM DAERAH KABUPATEN SIKKA</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i>DASHBOARD</a></li>
    <li class="active">DASHBOARD</li>
  </ol>
</section>

<!--ANGGOTA-->
<section class="content">
  <div class="row">
  <div class="col-sm-12">
  <div class="col-lg-3 col-xs-6">
  <div class="small-box bg-aqua">
  <div class="inner">
    <h3><?= $count_pengguna;?></h3>
        <p>ANGGOTA</p>
</div>
  <div class="icon">
  <i class="fa fa-id-card"></i>
</div>
<a href="user" class="small-box-footer">KLIK DISINI <i class="fa fa-hand-pointer-o"></i></a>
</div>
</div>
<!--DAFTAR BUKU-->
  <div class="col-lg-3 col-xs-6">
  <div class="small-box bg-blue">
  <div class="inner">
  <h3><?= $count_buku;?></h3>
        <p>DAFTAR BUKU</p>
</div>
  <div class="icon">
  <i class="fa fa-book"></i>
  </div>
  <a href="data" class="small-box-footer">KLIK DISINI <i class="fa fa-hand-pointer-o"></i></a>
</div>
</div> 
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-red">
<div class="inner">
<h3><?= $count_pinjam;?></h3>
<!--PEMINJAMAN-->
                      <p>PEMINJAMAN</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-minus-square-o"></i>
                    </div>
                    <a href="transaksi" class="small-box-footer">KLIK DISINI <i class="fa fa-hand-pointer-o"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-lime">
                    <div class="inner">
                      <h3><?= $count_kembali;?></h3>
                      <p>PENGEMBALIAN</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check-square-o"></i>
                    </div>
                    <a href="transaksi/kembali" class="small-box-footer">KLIK DISINI <i class="fa fa-hand-pointer-o"></i></a>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar-check-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TANGGAL HARI INI</span>
              <span class="info-box-number"><?php $today= date("d/m/Y"); echo $today; ?></span>
            </div>
              </div>
            </div>
        </section>
    </div>
    
