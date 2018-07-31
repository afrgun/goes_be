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
                        <h3 class="card-title">Edit Data Guru</h3>
                    </div>
                    <!-- form start -->
                    <?php foreach($singleGuru as $guru) {?>
                    <form method="post" action="<?php echo base_url() . "edit_guru/update"?>">
                        <div class="card-body"><td>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label id="kd_guru">Kode guru :</label>
                                        <input type="text" id="kd_guru" name="kd_guru" class="form-control" value="<?php echo $guru->kd_guru; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label id="nm_guru">Nama guru :</label>
                                        <input type="text" id="nm_guru" name="nm_guru" class="form-control" value="<?php echo $guru->nm_guru; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label id="tgl_lahir">Tanggal Lahir :</label>
                                        <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $guru->tgl_lahir; ?>">
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Status '); ?> <?php echo form_error('status'); ?>
                                        <?php 
                                            
                                            $options = array(
                                                'Guru Mapel'         => 'Guru Mapel',
                                                'Guru Kelas'         => 'Guru Kelas',
                                            );
                                        
                                            echo form_dropdown('status', $options, $guru->status, 'class="form-control"'); 
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
                                            
                                            echo form_dropdown('jk', $options, $guru->jk, 'class="form-control"'); 
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
                                            
                                            echo form_dropdown('pendidikan', $options, $guru->pendidikan, 'class="form-control"'); 
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label id="pass_guru">Password Guru :</label>
                                        <input type="text" id="pass_guru" name="pass_guru" class="form-control" value="<?php echo $guru->pass_guru; ?>">
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