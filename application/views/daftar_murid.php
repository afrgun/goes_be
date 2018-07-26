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
              <button class="float-right btn btn-info"><a href="<?php echo base_url(); ?>tambah"> Tambah Guru </a></button>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        
      </section>
      
    </div>
    <?php #$this->load->view('footer'); ?>
  </div>
  </body>
</html>