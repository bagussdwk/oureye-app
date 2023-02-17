<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-16x16.png">
  <meta name="author" content="Bagus Dwi Kurniawan">
  <title>OurEye</title>
  <link rel="stylesheet" href="<?= base_url('template/frontEnd/'); ?>css/theme.min.css">
  <link href="<?= base_url('assets'); ?>/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">
  <div class="navbar">
    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
      <div class="container">
        <a class="navbar-brand pe-4 fs-4" href="<?= base_url(); ?>">
          <i class="fas fa-eye"></i>
          <span class="ms-1 fw-bolder">OurEye</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link active" href="<?= base_url('home'); ?>">
                Home
              </a>
            </li>
            <?php
            if ($this->session->userdata('email')) {
              $log = 'Logout';
              $url = 'logout';
              $link = base_url('user');
              $menu = '<li class="nav-item">' . '<a class="nav-link" href=" ' . $link . '">' . "Profile" . '</a>' . '</li>';
            } else {
              $log = 'Sign Up';
              $url = 'registrasi';
              $menu = '';
            }
            ?>
            <?= $menu; ?>
          </ul>
          <div>
            <a href="<?= base_url("auth/" . $url); ?>" class="link-dark pb-1 link-fancy me-2">
              <span><?= $log; ?></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div style="padding-top: 100px; margin: 0 200px;">
    <h2 style="color: black; text-align: center;">Daftar Gejala</h2>
    <table class="table table-bordered">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">Gejala</th>
          <th scope="col">Jawaban</th>
        </tr>
      </thead>
      <tbody>
        <form class="form" action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
          <?php foreach ($gejala as $g) : ?>
            <tr>
              <td class="text-center"><label for="<?= $g['id_gejala']; ?>"><?= $g['gejala']; ?></label></td>
              <td class="text-center"><input id="<?= $g['id_gejala']; ?>" name="gejala[]" value="<?= $g['id_gejala']; ?>" type="checkbox" /></td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      <button class="btn-success btn-lg mx-2" type="submit">Hitung</button>
      <button class="btn-danger btn-lg mx-2" type="reset">Reset</button>
    </div>
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>