<!-- header -->
    <div class="wrapper-elite header">
      <div class="wrapper menusaya">

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top">
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><strong>School</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse kekanan" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('edukatif'); ?>">Laman Edukatif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('galery')?>">Gallery Inspiratif</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <?php if ($this->session->userdata('masuk')): ?>
              <li class="nav-item dropdown" style="z-index: 9999;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $this->session->userdata('ses_id'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('acount?user='.$this->session->userdata('ses_id')) ?>">Dasboard</a>
                  <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Logout</a>
                </div>
              </li>
            <?php else: ?>
              <li class="nav-item dropdown" style="z-index: 9999;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('registrasi'); ?>">Daftar</a>
                  <a class="dropdown-item" href="<?php echo base_url('login'); ?>">login</a>
                </div>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </nav>
      </div>
    </div>