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
                <h1></h1>
                </div>
            </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Siswa</h3>
                        </div>
                        <?php echo form_open('tambah_siswa'); ?>
                        <?php if( $this->session->flashdata('success_siswa')) {?>
                            <div id="alertAdd" class="alert alert-success alert-dismissible" style="margin: 30px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fa fa-check"></i> Berhasil!</h5>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <?php echo form_label('Kode Siswa '); ?> <?php echo form_error('kd_siswa'); ?>
                                        <?php echo form_input(array('id' => 'kd_siswa', 'name' => 'kd_siswa', 'class' => 'form-control')); ?> 
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Nama Siswa '); ?> <?php echo form_error('nm_siswa'); ?>
                                        <?php echo form_input(array('id' => 'nm_siswa', 'name' => 'nm_siswa', 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Tanggal Lahir '); ?> <?php echo form_error('tgl_lahir'); ?>
                                        <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Tahun Masuk '); ?> <?php echo form_error('thn_masuk'); ?>
                                        <?php echo form_input(array('id' => 'thn_masuk', 'name' => 'thn_masuk', 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Jenis Kelamin '); ?> <?php echo form_error('jk'); ?>
                                        <?php 
                                            $options = array(
                                                'L'         => 'L',
                                                'P'         => 'P',
                                            );
                                            
                                            echo form_dropdown('jk', $options, 'P', 'class="form-control"'); 
                                        ?>  
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <?php echo form_label('Nama Orangtua '); ?> <?php echo form_error('nm_ortu'); ?>
                                        <?php echo form_input(array('id' => 'nm_ortu', 'name' => 'nm_ortu', 'class' => 'form-control')); ?> 
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Alamat '); ?> <?php echo form_error('alamat'); ?>
                                        <?php echo form_input(array('id' => 'alamat', 'name' => 'alamat', 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Nomor Telp '); ?> <?php echo form_error('no_telp'); ?>
                                        <?php echo form_input(array('id' => 'no_telp', 'name' => 'no_telp', 'class' => 'form-control')); ?></div>
                                    <div class="form-group">
                                        <?php echo form_label('Password '); ?> <?php echo form_error('pass_siswa'); ?>
                                        <?php echo form_input(array('id' => 'pass_siswa', 'name' => 'pass_siswa', 'class' => 'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php echo form_submit(array('id' => 'submit','class'=> 'btn btn-primary', 'value' => 'Submit')); ?>
                            <?php echo form_close(); ?><br/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php #$this->load->view('footer'); ?>
</div>
<!-- jQuery -->

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inputmask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inputmask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inputmask/jquery.inputmask.extensions.js"></script>
<script>
    $(function(){
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        $('[data-mask]').inputmask()
    })
</script>
</body>
</html>