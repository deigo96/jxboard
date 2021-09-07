                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/project'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-6 offset-lg-3 mt-50">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">Tambah Project</div>
                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body">
                            <?php if($this->session->flashdata('class')): ?>
                                <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                            <?php endif ; ?>
                            <?php echo form_open_multipart('admin/tambahProject', '', ''); ?>
                                <div class="form-group">
                                    <?php echo form_input('nama_project', '', array('placeholder' => 'Input Project', 'class' => 'form-control')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_upload('gambar', '', 'class="form-control custom-file"') ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_submit('Tambah Project', 'Tambah', 'class="btn btn-primary offset-4"') ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>