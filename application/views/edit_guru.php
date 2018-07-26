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
                        <h3 class="card-title">Tambah Data Guru</h3>
                    </div>
                    <!-- form start -->
                    <?php foreach($singleGuru as $guru) {?>
                    <form method="post" action="<?php echo base_url() . "edit_guru/update"?>">
                    
                        <div class="card-body"><td><?php echo $guru->kd_guru?></td>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <?php echo form_label('Kode guru '); ?> <?php echo form_error('kd_guru'); ?>
                                        <?php echo form_input(array('id' => 'kd_guru', 'name' => 'kd_guru', 'class' => 'form-control')); ?> 
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Nama guru '); ?> <?php echo form_error('nm_guru'); ?>
                                        <?php echo form_input(array('id' => 'nm_guru', 'name' => 'nm_guru', 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Tanggal Lahir '); ?> <?php echo form_error('tgl_lahir'); ?>
                                        <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        <?php 
                                        #echo form_input(array('type'=>'date', 'id' => 'tgl_lahir', 'name' => 'tgl_lahir', 'class' => 'form-control')); ?> 
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Status '); ?> <?php echo form_error('status'); ?>
                                        <?php 
                                            $options = array(
                                                'Guru Mapel'         => 'Guru Mapel',
                                                'Guru Kelas'         => 'Guru Kelas',
                                            );
                                            
                                            echo form_dropdown('status', $options, 'gk', 'class="form-control"'); 
                                        ?> 
                                    </div>
                                </div>
                                <div class="col-6">
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
                                    <div class="form-group">
                                        <?php echo form_label('Pendidikan '); ?> <?php echo form_error('pendidikan'); ?>
                                        <?php 
                                            $options = array(
                                                'S1'    => 'S1',
                                                'S2'    => 'S2',
                                                'D3'    => 'D3'
                                            );
                                            
                                            echo form_dropdown('pendidikan', $options, 'S1', 'class="form-control"'); 
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Password guru'); ?> <?php echo form_error('pass_guru'); ?>
                                        <?php echo form_input(array('id' => 'pass_guru', 'name' => 'pass_guru', 'class' => 'form-control')); ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <?php echo form_submit(array('id' => 'submit','class'=> 'btn btn-primary', 'value' => 'Submit')); ?>
                        </div>
                    </form>
                    <?php } ?>
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