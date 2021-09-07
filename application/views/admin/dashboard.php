                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                        <a href="<?php echo base_url('admin/project') ?>" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                        </div>
                    </div>
                </div>
                <?php if($this->session->flashdata('class')): ?>
                    <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                <?php endif ; ?>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php if($allProjects): ?>
                        <?php foreach($allProjects as $project): ?>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="card">
                                    <img src="<?php echo base_url('assets/images/projects/'. $project->gambar) ?>" alt="" class="card-img-top">
                                    <div class="card-body text-center">
                                        <h5 class="font-weight-bold"><?php echo $project->nama_project ?></h5>
                                        <p class="card-text text-center"><?php echo $project->tanggal ?></p>
                                        <a href="<?php echo base_url('admin/editProject/'. $project->id_project) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pencil-alt">Edit</i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Apakah Anda yakin ingin menghapus data??</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <!-- <div class="modal-body">
                                            ..
                                        </div> -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a href="<?php echo base_url('admin/hapusProject/'.$project->id_project) ?>" class="btn btn-danger"><b>Hapus</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
