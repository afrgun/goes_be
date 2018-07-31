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
              <h1>Data Guru</h1>
            </div>
            <div class="col-sm-6">
              <button class="float-right btn btn-info"><a href="<?php echo base_url(); ?>tambah"> Tambah Guru </a></button>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-12">
          <?php if( $this->session->flashdata('delete')) {?>
              <div class="alert alert-danger alert-dismissible" style="margin: 30px">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-check"></i> Data terhapus</h5>
              </div>
          <?php } ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table Guru</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td><strong>Kode Guru</strong></td>
                    <td><strong>Nama Guru</strong></td>
                    <td><strong>Tanggal Lahir</strong></td>
                    <td><strong>Status</strong></td>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td><strong>Pendidikan</strong></td>
                    <td><strong>Password Guru</strong></td>
                    <td><strong>Pilihan</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($gurus as $guru){?>
                    <tr>
                      <td><?php echo $guru->kd_guru?></td>
                      <td><?php echo $guru->nm_guru?></td>
                      <td><?php echo $guru->tgl_lahir?></td>
                      <td><?php echo $guru->status?></td>
                      <td><?php echo $guru->jk?></td>
                      <td><?php echo $guru->pendidikan?></td>
                      <td><?php echo $guru->pass_guru?></td>
                      <td>
                        <a href="<?php echo base_url() ."daftar_guru/delete/" .$guru->kd_guru; ?>"><button class="btn btn-danger"> Delete </button></a>
                        <a href="<?php echo base_url() ."edit_guru/update/" .$guru->kd_guru; ?>"><button class="btn btn-warning"> Edit </button></a>
                      </td>
                    </tr>  
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td><strong>Kode Guru</strong></td>
                    <td><strong>Nama Guru</strong></td>
                    <td><strong>Tanggal Lahir</strong></td>
                    <td><strong>Status</strong></td>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td><strong>Pendidikan</strong></td>
                    <td><strong>Password Guru</strong></td>
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

  <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
  </body>
</html>