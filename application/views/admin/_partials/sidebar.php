<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <!-- Dashboard Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('home') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Dashboard End -->
    <?php if($this->session->userdata('akses')=='1'):?>
    <!-- Skripsi Mahasiswa (Kaprodi) Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengajuan_mahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-clipboard"></i>
            <span>Skripsi Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pengajuan_mahasiswa') ?>">Pengajuan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen_pembimbing') ?>">Pemilihan Dosen Pembimbing</a>
            <a class="dropdown-item" href="<?php echo site_url('jadwal_sidang/isi_jadwal_sidang') ?>">Isi Jadwal Sidang</a>
        </div>
    </li>
    <!-- Skripsi Mahasiswa (Kaprodi) End -->
    <?php elseif($this->session->userdata('akses')=='2'):?>
    <!-- Skripsi Mahasiswa (Dosen) Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengajuan_mahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-clipboard"></i>
            <span>Skripsi Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pengajuan_mahasiswa') ?>">Pengajuan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('jadwal_sidang/isi_jadwal_sidang') ?>">Isi Jadwal Sidang</a>
        </div>
    </li>
    <!-- Skripsi Mahasiswa (Dosen) End -->
    <?php elseif($this->session->userdata('akses')=='4'):?>
    <!-- Pengajuan Skripsi Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengajuan_mahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-file-signature"></i>
            <span>Pengajuan Skripsi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pengajuan_mahasiswa/add') ?>">Pengajuan Judul</a>
            <a class="dropdown-item" href="<?php echo site_url('seminar_proposal') ?>">Seminar Proposal</a>
        </div>
    </li>
    <!-- Pengajuan Skripsi End -->
<?php else:?>
<!-- Skripsi Mahasiswa TIM RMK Start -->
<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengajuan_mahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-clipboard"></i>
            <span>Skripsi Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pengajuan_mahasiswa') ?>">Pengajuan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen_pembimbing') ?>">Cek RMK</a>
        </div>
    </li>
    <!-- Skripsi Mahasiswa TIM RMK End -->
    <?php endif;?>
    <!-- Jadwal Sidang Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('jadwal_sidang') ?>">
        <i class="far fa-clock"></i>
            <span>Jadwal Sidang</span>
        </a>
    </li>
    <!-- Jadwal Sidang End-->
    <?php if($this->session->userdata('akses')=='4'):?>
    <!-- Riwayat Pengajuan Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('riwayat') ?>">
        <i class="fas fa-history"></i>
            <span>Riwayat Pengajuan</span>
        </a>
    </li>
    <!-- Riwayat Pengajuan End-->
    <?php endif;?>


    <!-- other menu
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
    <!-- other menu -->
</ul>
