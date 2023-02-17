<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Hasil Diagnosa</title>
  <!-- <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css" /> -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style_hasil_diagnosis.css">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  <meta name="author" content="Bagus Dwi Kurniawan">
  <link rel="stylesheet" href="<?= base_url('template/frontEnd/'); ?>css/theme.min.css">
  <link href="<?= base_url('assets'); ?>/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<style>
  /* inter-300 - latin */
  @font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local(''),
      url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
      /* Chrome 26+, Opera 23+, Firefox 39+ */
      url('./fonts/inter-v12-latin-300.woff') format('woff');
    /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
  }

  @font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: local(''),
      url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
      /* Chrome 26+, Opera 23+, Firefox 39+ */
      url('./fonts/inter-v12-latin-500.woff') format('woff');
    /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
  }

  @font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local(''),
      url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
      /* Chrome 26+, Opera 23+, Firefox 39+ */
      url('./fonts/inter-v12-latin-700.woff') format('woff');
    /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
  }
</style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

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
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home/article'); ?>">
              Artikel
            </a>
          </li>
          <?php
          if ($this->session->userdata('email')) {
            $log = 'Logout';
            $url = 'logout';
            $link = base_url('user');
            $menu = '<li class="nav-item">' . '<a class="nav-link" href=" ' . $link . '">' . "Profile" . '</a>' . '</li>';
          } else {
            $log = 'Sign in';
            $url = '';
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
  <div class="about-section">
    <div class="inner-width">
      <h1>Hasil Diagnosa</h1>
      <div class="border"></div>
      <div class="about-section-row">
        <div class="about-section-col">
          <div class="about">
            <?php foreach ($hasilMax as $h) : ?>
              <a><?= $h['nama_penyakit']; ?></a>
            <?php endforeach; ?>
            <p>
              <b>Info Penyakit</b><br>
              <?= $h['informasi']; ?>
            </p>
            <p>
              <b>Saran</b><br>
              <?= $h['saran']; ?>
            </p>
          </div>
        </div>
        <div class="about-section-col" style="margin-top: 55px;">
          <div class="skills">
            <?php foreach ($hasil as $h) : ?>
              <div class="skill" style="margin-bottom: 25px;">
                <div class="title" style="margin-bottom: 3px;"><b><?= $h['nama_penyakit']; ?></b> (<?= $h['hasil_probabilitas'] * 100; ?>)</div>
                <div class="progress">
                  <div class="progress-bar" style="width: <?= floor($h['hasil_probabilitas'] * 100); ?>%"><span><?= floor($h['hasil_probabilitas'] * 100); ?>%</span></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div style="padding-top: 100px; margin: 0 200px;">
      <h2 style="color: black; text-align: center;">Table Perhitungan</h2>
      <div class="d-flex bd-highlight text-center">
        <div class="p-2 flex-fill bd-highlight">
          <p>Probabilitas hipotesis H atau P(H) :</p>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Probabilitas P(H)</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($penyakit as $p) : ?>
                <tr">
                  <td><?= $p['probabilitas']; ?></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="p-2 flex-fill bd-highlight">
          <p>Total Probabilitas X berdasarkan kondisi pada hipotesis H :</p>
          <?php $a = array($miopia, $hipermetropia, $astigmatisma, $presbiopi); ?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Probabilitas P(X|H)</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($a as $nilai) : ?>
                <tr">
                  <td><?= $nilai; ?></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="p-2 flex-fill bd-highlight">
          <p>Probabilitas dari X:</p>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Total Probabilitas P(X)</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 0; $i < 4; $i++) { ?>
                <tr>
                  <td><?= array_sum($a); ?></td>
                </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>

      <table class="table mt-3 text-center  ">
        <thead class="thead-dark">
          <tr>
            <th scope="col"></th>
            <th scope="col">P(X|H)*P(H)/P(X)</th>
            <th scope="col">Presentase</th>
          </tr>
        </thead>
        <tbody>
          <?php $a = array($miopia, $hipermetropia, $astigmatisma, $presbiopi); ?>
          <tr>
            <td>P(H|1)</td>
            <td><?= $miopia / array_sum($a); ?></td>
            <td><?= $miopia / array_sum($a) * 100; ?>%</td>
          </tr>
          <tr>
            <td>P(H|2)</td>
            <td><?= $hipermetropia / array_sum($a); ?></td>
            <td><?= $hipermetropia / array_sum($a) * 100; ?>%</td>
          </tr>
          <tr>
            <td>P(H|3)</td>
            <td><?= $astigmatisma / array_sum($a); ?></td>
            <td><?= $astigmatisma / array_sum($a) * 100; ?>%</td>
          </tr>
          <tr>
            <td>P(H|4)</td>
            <td><?= $presbiopi / array_sum($a); ?></td>
            <td><?= $presbiopi / array_sum($a) * 100; ?>%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>