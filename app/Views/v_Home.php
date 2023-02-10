<!-- template -->
<?= $this->extend('v_Template') ?>

<!-- content -->
<?= $this->section('content') ?>

  <h1>
    <?php
      if(session()->get('username'))
      {
        echo 'Selamat datang, '.session()->get('username');
      }
      else
      {
        echo 'Silahkan login terlebih dahulu';
      }
    ?>
  </h1>

<!-- end content -->
<?= $this->endSection() ?>
