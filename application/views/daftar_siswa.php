<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('header'); ?>

  <body>
  <div class="wrapper">
    <?php $this->load->view('sidebar'); ?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Murid</h1>
            </div>
            <div class="col-sm-6">
              <button class="float-right btn btn-info"><a href="<?php echo base_url(); ?>tambah_siswa"> Tambah Siswa </a></button>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-12">
            <?php if( $this->session->flashdata('delete_siswa')) {?>
              <div class="alert alert-danger alert-dismissible" style="margin: 30px">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-check"></i> Data terhapus</h5>
              </div>
            <?php } ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td><strong>Kode Siswa</strong></td>
                      <td><strong>Nama Siswa</strong></td>
                      <td><strong>Tanggal Lahir</strong></td>
                      <td><strong>Tahun Masuk</strong></td>
                      <td><strong>Jenis Kelamin</strong></td>
                      <td><strong>Nama Orang tua</strong></td>
                      <td><strong>Alamat</strong></td>
                      <td><strong>No telp</strong></td>
                      <td><strong>Pasword</strong></td>
                      <td><strong>Pilihan</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($siswas as $siswa){?>
                      <tr>
                        <td><?php echo $siswa->kd_siswa?></td>
                        <td><?php echo $siswa->nm_siswa?></td>
                        <td><?php echo $siswa->tgl_lahir?></td>
                        <td><?php echo $siswa->thn_masuk?></td>
                        <td><?php echo $siswa->jk?></td>
                        <td><?php echo $siswa->nm_ortu?></td>
                        <td><?php echo $siswa->alamat?></td>
                        <td><?php echo $siswa->no_telp?></td>
                        <td><?php echo $siswa->pass_siswa?></td>
                        <td>
                          <a href="<?php echo base_url() ."daftar_siswa/delete/" .$siswa->kd_siswa; ?>"><button class="btn btn-danger"> Delete </button></a>
                          <a href="<?php echo base_url() ."edit_siswa/update/" .$siswa->kd_siswa; ?>"><button class="btn btn-warning"> Edit </button></a>
                        </td>
                      </tr>  
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td><strong>Kode Siswa</strong></td>
                      <td><strong>Nama Siswa</strong></td>
                      <td><strong>Tanggal Lahir</strong></td>
                      <td><strong>Tahun Masuk</strong></td>
                      <td><strong>Jenis Kelamin</strong></td>
                      <td><strong>Nama Orang tua</strong></td>
                      <td><strong>Alamat</strong></td>
                      <td><strong>No telp</strong></td>
                      <td><strong>Pasword</strong></td>
                      <td><strong>Pilihan</strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>
    <?php #$this->load->view('footer'); ?>
  </div>
  </body>
</html>