
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
            <li>
                <a href="<?php echo base_url('login'); ?>" class="btn-login btn-outline-primary">Login</a>
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
                <a href="<?php echo base_url() ?>" class="active">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('home/projects') ?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo base_url('home/about') ?>">About</a>
            </li>
            <a href="<?php echo base_url('login'); ?>" class="btn info">Login</a>
        </ul>
    </nav>
    <div id="banner" style="background: rgba(0, 0, 0, 0.2) url('<?php echo base_url('assets/images/background.jpg') ?>')">
        <h1>Jakarta Experience Board</h1>
        <h3>Pesona Jakarta</h3>
    </div>
    <main>
        <a href=""><h2 class="section-heading">Projects</h2></a>
        <section>
            <?php foreach($projects as $project): ?>
                <div class="card">
                    <div class="card-image">
                        <a href="">
                            <img src="<?php echo base_url('assets/images/projects/'.$project->gambar) ?>" alt="<?php echo $project->gambar ?>">
                        </a>
                    </div>
                    <div class="card-description">
                        <a href="#">
                            <h4><?php echo $project->nama_project ?></h4>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
