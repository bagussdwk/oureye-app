<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-16x16.png">
  <title>Artikel - SP OurEye</title>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style_artikel.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <?php foreach ($artikel as $a) : ?>
    <div class="blog-post" style="padding: 60px 0px;">
      <div class="blog-post__img">
        <img src="<?= base_url('assets/images/artikel/') . $a['image']; ?>" />
      </div>
      <div class="blog-post__info">
        <div class="blog-post__date">
          <span><?= (new DateTime($a['tanggal']))->format('l'); ?></span>
          <span><?= (new DateTime($a['tanggal']))->format('F d Y'); ?></span>
        </div>
        <h1 class="blog-post__title"><?= $a['judul']; ?></h1>
        <p class="blog-post__text">
          <?= $a['isi']; ?>
        </p>
        <a href="#" class="blog-post__cta">Read more</a>
      </div>
    </div>
  <?php endforeach; ?>
</body>

</html>