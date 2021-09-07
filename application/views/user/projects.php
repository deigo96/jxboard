
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>">About</a>
            </li>
        </ul>
    </div>
    <nav style="background: #fff">
        <div id="logo-img">
            <a href="<?php echo base_url() ?>">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li style="color: #0a0a0a">
                <a href="<?php echo base_url() ?>" >Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('home/projects') ?>" class="active">Projects</a>
            </li>
            <li>
                <a href="<?php echo base_url('home/about') ?>">About</a>
            </li>
            <a href="<?php echo base_url('login'); ?>" class="btn info">Login</a>
        </ul>
    </nav>
    <main>
        <h2 class="page-heading">Projects</h2>
        <section>
            <?php foreach($projects as $project): ?>
                <div class="card">
                    <div class="card-descrtiption" style="background: #fff; bor">
                        <h3 style="text-align:center; margin-bottom: 1px;"><?php echo $project->nama_project ?></h3>
                        <div class="card-meta" style="text-align: end;">
                            Posted on <?php echo $project->tanggal ?>
                        </div>
                        <hr>
                    </div>
                    <div class="card-image">
                        <img src="<?php echo base_url('assets/images/projects/'.$project->gambar) ?>" alt="<?php echo $project->gambar ?>">
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
        
