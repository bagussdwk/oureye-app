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

<body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">

  <div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">

      <div class="col-12 d-flex align-items-start flex-column px-vw-5">

        <header class="mb-auto py-vh-2 col-12">
          <a class="navbar-brand pe-4 fs-4" href="<?= base_url(); ?>">
            <i class="fas fa-eye"></i>
            <span class="ms-1 fw-bolder">OurEye</span>
          </a>

        </header>
        <main class="mb-auto col-12">
          <h1>404</h1>

          <h1 class="display-1 fw-bold">Uuuups, something is broken...</h1>
          <p class="lead">The page you are looking for doesn't exist or has been moved.</p>
          <a href="<?= base_url(); ?>" class="link-fancy">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
            Go back to frontpage</a>

        </main>
      </div>

    </div>

  </div>
</body>

</html>