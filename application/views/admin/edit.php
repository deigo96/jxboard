                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/project'); ?>" class="nav-link">
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
                <div class="col-md-6 offset-3 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Project</h3>
                            <div class="card-tools">
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if($this->session->flashdata('error')): ?>
                                <p class="alert alert-danger text-center">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </p>
                            <?php endif ; ?>
                            <?php echo form_open_multipart('admin/udpateProject', '', '') ?>
                                <input type="hidden" name="xid" value="<?php echo $project[0]['id_project']; ?>">
                                <input type="hidden" name="oldImg" value="<?php echo $project[0]['gambar']; ?>">
                                <div class="form-group">
                                    <?php echo form_input('nama_project', $project[0] ['nama_project'], 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_upload('gambar', '','class="form-control custom-file"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_submit('Update Project', 'Update Project', 'class="btn btn-primary offset-4"') ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>